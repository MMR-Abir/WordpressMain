<?php

use Duplicator\Libs\Snap\SnapUtil;

defined('ABSPATH') || defined('DUPXABSPATH') || exit;
// Exit if accessed directly
if (! defined('DUPLICATOR_VERSION')) {
    exit;
}

require_once(DUPLICATOR_PLUGIN_PATH . '/ctrls/ctrl.base.php');
require_once(DUPLICATOR_PLUGIN_PATH . '/classes/ui/class.ui.viewstate.php');

/**
 * Controller for Tools
 *
 * @package Duplicator\ctrls
 */
class DUP_CTRL_UI extends DUP_CTRL_Base
{
    public function __construct()
    {
        add_action('wp_ajax_DUP_CTRL_UI_SaveViewState', array($this,    'SaveViewState'));
    }


    /**
     * Calls the SaveViewState and returns a JSON result
     *
     * @param string $_POST['key']      A unique key that identifies the state of the UI element
     * @param bool   $_POST['value']    The value to store for the state of the UI element
     *
     * @notes: Testing: See Testing Interface
     * URL = /wp-admin/admin-ajax.php?action=DUP_CTRL_UI_SaveViewState
     *
     * <code>
     * //JavaScript Ajax Request
     * Duplicator.UI.SaveViewState('dup-pack-archive-panel', 1);
     *
     * //Call PHP Code
     * $view_state       = DUP_UI_ViewState::getValue('dup-pack-archive-panel');
     * $ui_css_archive   = ($view_state == 1)   ? 'display:block' : 'display:none';
     * </code>
     */
    public function SaveViewState()
    {
        DUP_Handler::init_error_handler();
        check_ajax_referer('DUP_CTRL_UI_SaveViewState', 'nonce');
        DUP_Util::hasCapability('export');

        $payload = array(
            'success' => false,
            'message' => '',
            'key'     => '',
            'value'   => ''
        );

        $isValid = true;
        $states  = false;
        if (isset($_POST['states'])) {
            $states = is_scalar($_POST['states']) ? [$_POST['states']] : $_POST['states'];
        }

        $mainKey   = SnapUtil::sanitizeTextInput(INPUT_POST, 'key', false);
        $mainValue = SnapUtil::sanitizeTextInput(INPUT_POST, 'value', false);

        if ($states !== false) {
            foreach ($states as $index => $state) {
                $key   = isset($state['key']) ? SnapUtil::sanitizeNSCharsNewline($state['key']) : false;
                $value = isset($state['value']) ? SnapUtil::sanitizeNSCharsNewline($state['value']) : false;

                if ($key == false && $value == false) {
                    $isValid = false;
                    break;
                }

                $states[$index] = [
                    'key'   => $key,
                    'value' => $value,
                ];
            }
        }

        if ($states === false && ($mainKey === false || $mainValue === false)) {
            $isValid = false;
        }

        $result = new DUP_CTRL_Result($this);
        try {
            if (!$isValid) {
                throw new Exception(__('Invalid Request.', 'duplicator'));
            }

            if ($states !== false && count($states) > 0) {
                $view_state = DUP_UI_ViewState::getArray();
                $last_key   = '';
                foreach ($states as $state) {
                    $view_state[$state['key']] = $state['value'];
                    $last_key                  = $state['key'];
                }
                $payload['success'] = DUP_UI_ViewState::setArray($view_state);
                $payload['key']     = esc_html($last_key);
                $payload['value']   = esc_html($view_state[$last_key]);
            } else {
                $payload['success'] = DUP_UI_ViewState::save($mainKey, $mainValue);
                $payload['key']     = esc_html($mainKey);
                $payload['value']   = esc_html($mainValue);
            }

            //RETURN RESULT
            $test = ($payload['success'])
                ? DUP_CTRL_Status::SUCCESS
                : DUP_CTRL_Status::FAILED;
            return $result->process($payload, $test);
        } catch (Exception $exc) {
            $result->processError($exc);
        }
    }

    /**
   * Returns a JSON list of all saved view state items
     *
     * <code>
     *  See SaveViewState()
     * </code>
     */
    public function GetViewStateList()
    {
        $result = new DUP_CTRL_Result($this);

        try {
            //CONTROLLER LOGIC
            $payload = DUP_UI_ViewState::getArray();

            //RETURN RESULT
            $test = (is_array($payload) && count($payload))
                    ? DUP_CTRL_Status::SUCCESS
                    : DUP_CTRL_Status::FAILED;
            return $result->process($payload, $test);
        } catch (Exception $exc) {
            $result->processError($exc);
        }
    }
}
