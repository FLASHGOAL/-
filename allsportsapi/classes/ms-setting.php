<?php

if ( ! class_exists( 'ms_Settings' ) ) {

    /**
     *
     */
    class ms_Settings{

        /**
         * The name for plugin options
         *
         * @var string
         */
        static $global_option = 'Live_Scores_Options';

        /**
         * Updates the General Settings of Plugin
         *
         * @return void
         * @access public
         */
        static function update_options($options) {
            // Save Class variable
            ms_Main::$settings = $options;

            return update_option(self::$global_option, $options);
        }

        static function delete_options() {
           return delete_option(self::$global_option);
        }



        /**
         * Return the General Settings of Plugin, and set them to default values if they are empty
         *
         * @return array general options of plugin
         * @access public
         */
        static function get_options() {

            // If isn't empty, return class variable
            if (ms_Main::$settings) {
                return ms_Main::$settings;
            }

            // default values
            $options = array
            (
				'ms_api_key' => '78c11f8b5862f26af680191f693578c72a132c382dd40040a41c67ff66fbcfbf',
                'ms_color_one' => '#ffc107',
                'ms_color_two' => '#27282a',
                'ms_color_three' => '#f1f1f1',
                'ms_widget_width' => '19',
                'ms_preferential_leagues' => '4 3 1 302 244 207 175 168 152',
	            'ms_up_to_top_button' => 'yes'
            );

            // get saved options
            $saved = get_option(self::$global_option);

            // assign them
            if (!empty($saved)) {
                foreach ($saved as $key => $option) {
                    $options[$key] = $option;
                }
            }

            // update the options if necessary
            if ($saved != $options) {
                update_option(self::$global_option, $options);
            }

            // Save class variable
            ms_Main::$settings = $options;

            //return the options
            return $options;
        }

    } // end ms_Settings
}
