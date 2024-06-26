<?php
/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://www.coderscom.com/
 * @since      1.0.0
 *
 * @package    Wp_Odoo_Form_Integrator
 * @subpackage Wp_Odoo_Form_Integrator/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wp_Odoo_Form_Integrator
 * @subpackage Wp_Odoo_Form_Integrator/admin
 * @author     Coderscom <coderscom@outlook.com>
 */

class Wp_Odoo_Form_Integrator_Ninja_Forms {

    /**
     * Register the stylesheets for the admin area.
     *
     * @since    1.0.0
     */
    public function get_plugin_slug(){
        return "ninja-forms";
    }

    /**
     * Register the stylesheets for the admin area.
     *
     * @since    1.0.0
     */
    public function get_action_tag(){
        return "ninja_forms_after_submission";
    }

    /**
     * Register the stylesheets for the admin area.
     *
     * @since    1.0.0
     */
    public function get_plugin_name(){
        return "Ninja Forms";
    }

    /**
     * Register the stylesheets for the admin area.
     *
     * @since    1.0.0
     */
    public function get_all_forms(){
        $result = array();        
        if (function_exists('Ninja_Forms')){
            $f = Ninja_Forms()->form()->get_forms();
            foreach ( $f as $form ) {
            $result[] = array(
              'id' => $form->get_id(),
              'label' => $form->get_setting( 'title' )
                );
            }        
        }
        
        return $result;
    }

    /**
     * Register the stylesheets for the admin area.
     *
     * @since    1.0.0
     */
    public function get_form_fields($form_id){
        $result = array();        
        if (function_exists('Ninja_Forms')){
            $f = Ninja_Forms()->form($form_id)->get_fields();
            foreach ( $f as $field ) {
                $result[] = array(
                    'id' => $field->get_id(),
                    'label' => $field->get_setting('label')
                );
            }        
        }        
        
        return $result;
    }

    /**
     * Callback argument count
     *
     * @since    1.0.0
     */
    public function get_callback_argument_count(){
        return 1;
    }    

    /**
     * Register the stylesheets for the admin area.
     *
     * @since    1.0.0
     */
    public function handle_callback($contact_form){
        $posted_data = array();
        if ( $contact_form ) {
            $form_id        = $contact_form['form_id'];
            foreach ($contact_form['fields'] as $key => $value) {
                $posted_data[$value['id']] = $value['value'];
            }
            do_action( 'wp_odoo_form_integrator_push_to_odoo', __CLASS__, $form_id, $posted_data );
        }
    }
}