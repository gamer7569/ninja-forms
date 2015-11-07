<?php if ( ! defined( 'ABSPATH' ) ) exit;

final class NF_Database_MockData
{

    public function __construct()
    {
        $this->_migrate();
    }

    public function form_contact_form_1()
    {
        /*
         * FORM
         */

        $form = Ninja_Forms()->form()->get();
        $form->update_setting( 'title', 'Contact Me' );
        $form->save();

        /*
         * FIELDS
         */

        $field = Ninja_Forms()->form( 1 )->field()->get();
        $field->update_setting( 'type', 'textbox' )
            ->update_setting( 'label', 'Name')
            ->update_setting( 'label_pos', 'above' )
            ->update_setting( 'required', 1 )
            ->update_setting( 'order', 1 )
            ->save();

        $name_field_id = $field->get_id();

        $field = Ninja_Forms()->form( 1 )->field()->get();
        $field->update_setting( 'type', 'email' )
            ->update_setting( 'label', 'Email')
            ->update_setting( 'label_pos', 'above' )
            ->update_setting( 'required', 1 )
            ->update_setting( 'order', 2 )
            ->save();

        $email_field_id = $field->get_id();

        // $field = Ninja_Forms()->form( 1 )->field()->get();
        // $field->update_setting( 'type', 'textbox' )
        //     ->update_setting( 'label', 'Confirm Email')
        //     ->update_setting( 'label_pos', 'above' )
        //     ->update_setting( 'confirm_field', $email_field_id )
        //     ->update_setting( 'required', 1 )
        //     ->update_setting( 'order', 3 )
        //     ->save();

        $field = Ninja_Forms()->form( 1 )->field()->get();
        $field->update_setting( 'type', 'textarea' )
            ->update_setting( 'label', 'Message')
            ->update_setting( 'label_pos', 'above' )
            ->update_setting( 'required', 1 )
            ->update_setting( 'order', 3 )
            ->save();

        // $field = Ninja_Forms()->form( 1 )->field()->get();
        // $field->update_setting( 'type', 'textbox' )
        //     ->update_setting( 'label', 'Mirror Name')
        //     ->update_setting( 'label_pos', 'above' )
        //     ->update_setting( 'required', 1 )
        //     ->update_setting( 'mirror_field', $name_field_id )
        //     ->update_setting( 'order', 5 )
        //     ->save();

        $options = array(
            array(
                'label' => 'One',
                'value' => '1',
                'calc' => 1
            ),
            array(
                'label' => 'Two',
                'value' => '2',
                'calc' => 2
            ),
            array(
                'label' => 'Three',
                'value' => '3',
                'calc' => 3
            ),
        );

        $field = Ninja_Forms()->form( 1 )->field()->get();
        $field->update_setting( 'type', 'listradio' )
            ->update_setting( 'label_pos', 'above')
            ->update_setting( 'label', "James' List")
            ->update_setting( 'options', $options)
            ->update_setting( 'order', 4 )
            ->save();

        $field = Ninja_Forms()->form( 1 )->field()->get();
        $field->update_setting( 'type', 'submit' )
            ->update_setting( 'label', 'Submit')
            ->update_setting( 'order', 5 )
            ->save();

        /*
         * ACTIONS
         */

        $action = Ninja_Forms()->form( 1 )->action()->get();
        $action->update_setting( 'title',  'Mock Success Message Action' )
            ->update_setting( 'type', 'successmessage' )
            ->update_setting( 'message', 'This is a test success message' )
            ->save();

        $action = Ninja_Forms()->form( 1 )->action()->get();
        $action->update_setting( 'title',  'Mock Redirect Action' )
            ->update_setting( 'type', 'redirect' )
            ->update_setting( 'url', 'http://kstover.codes' )
            ->update_setting( 'active', 0 )
            ->save();

        $action = Ninja_Forms()->form( 1 )->action()->get();
        $action->update_setting( 'title',  'Mock Email Action' )
            ->update_setting( 'type', 'email' )
            ->update_setting( 'to', array( 'kyle@wpninjas.com' ) )
            ->update_setting( 'subject', 'This is an email action.' )
            ->update_setting( 'message', 'Hello, Ninja Forms!' )
            ->update_setting( 'active', FALSE )
            ->save();

        $action = Ninja_Forms()->form( 1 )->action()->get();
        $action->update_setting( 'title',  'Run WordPress Action' )
            ->update_setting( 'type', 'custom' )
            ->update_setting( 'hook', 'action' )
            ->update_setting( 'tag', 'blarg_action' )
            ->save();

        $action = Ninja_Forms()->form( 1 )->action()->get();
        $action->update_setting( 'title',  'Mock Save Action' )
            ->update_setting( 'type', 'save' )
            ->save();

        /*
         * SUBMISSIONS
         */

        $sub = Ninja_Forms()->form( 1 )->sub()->get();
        $sub->update_field_value( 1, 'Kyle Johnson' )
            ->update_field_value( 2, 'kyle@wpninjas.com' )
            ->update_field_value( 3, 'kyle@wpninjas.com' )
            ->update_field_value( 4, 'This is a test.' )
            ->update_field_value( 5, 'Kyle Johnson' );
        $sub->save();

        // Delay Execution for different submission dates
        sleep(1);

        $sub = Ninja_Forms()->form( 1 )->sub()->get();
        $sub->update_field_value( 1, 'John Doe' )
            ->update_field_value( 2, 'user@gmail.com' )
            ->update_field_value( 3, 'user@gmail.com' )
            ->update_field_value( 4, 'This is another test.' )
            ->update_field_value( 5, 'John Doe' );
        $sub->save();
    }

    public function form_contact_form_2()
    {
        /*
         * FORM
         */

        $form = Ninja_Forms()->form()->get();
        $form->update_setting( 'title', 'Get Help' );
        $form->save();

        /*
         * FIELDS
         */

        $fields = array(
            array(
                'id'			=> 4,
                'type' 			=> 'textbox',
                'label'			=> 'Name',
                'label_pos' 	=> 'above',
                'order'         => 1,
            ),
            array(
                'id'			=> 12,
                'type'			=> 'email',
                'label'			=> 'Email',
                'label_pos'		=> 'above',
                'order'         => 2,
            ),
            array(
                'id'			=> 5,
                'type' 			=> 'textarea',
                'label'			=> 'What Can We Help You With?',
                'label_pos'		=> 'above',
                'order'         => 3,
            ),
            array(
                'id'			=> 6,
                'type' 			=> 'checkbox',
                'label'			=> 'Agree?',
                'label_pos'		=> 'right',
                'order'         => 4,
            ),
            array(
                'id'			=> 9,
                'type' 			=> 'listradio',
                'label'			=> 'Best Contact Method?',
                'label_pos'		=> 'above',
                'options'		=> array(
                    array(
                        'label'	=> 'Phone',
                        'value'	=> 'phone',
                        'calc'  => '',
                    ),
                    array(
                        'label'	=> 'Email',
                        'value'	=> 'email',
                        'calc'  => '',
                    ),
                    array(
                        'label'	=> 'Snail Mail',
                        'value'	=> 'snail-mail',
                        'calc'  => '',
                    ),
                ),
                'show_other'	=> 1,
                'required'      => 1,
                'order'         => 5,
            ),
            array(
                'id'			=> 7,
                'type'			=> 'submit',
                'label'			=> 'Send',
                'order'         => 6,
            )
        );

        foreach( $fields as $settings ){

            unset( $settings[ 'id' ] );

            $field = Ninja_Forms()->form( 2 )->field()->get();
            $field->update_settings( $settings )->save();
        }

        /*
         * ACTIONS
         */

        $action = Ninja_Forms()->form( 2 )->action()->get();
        $action->update_setting( 'title',  'Mock Save Action' )
            ->update_setting( 'type', 'save' )
            ->save();
    }

    public function form_kitchen_sink()
    {
        /*
         * FORM
         */
        $form = Ninja_Forms()->form()->get();
        $form->update_setting( 'title', 'Kitchen Sink' );
        $form->save();

        $form_id = $form->get_id();

        /*
         * FIELDS
         */

        foreach( Ninja_Forms()->fields as $field_type ){

            $label_pos = 'above';

            if( 'button' == $field_type->get_name() ) $label_pos = 'hidden';
            if( 'hidden' == $field_type->get_name() ) $label_pos = 'hidden';
            if( 'submit' == $field_type->get_name() ) $label_pos = 'hidden';
            if( 'timedsubmit' == $field_type->get_name() ) $label_pos = 'hidden';
            if( 'checkbox' == $field_type->get_name() ) $label_pos = 'right';

            $field = Ninja_Forms()->form( $form_id )->field()->get();
            $field->update_setting( 'type', $field_type->get_type() )
                ->update_setting( 'label', $field_type->get_nicename())
                ->update_setting( 'label_pos', $label_pos )
                ->update_setting( 'required', 0 )
                ->save();
        }
    }

    public function form_long_form( $num_fields = 100 )
    {
        /*
        * FORM
        */

        $form = Ninja_Forms()->form()->get();
        $form->update_setting( 'title', 'The Long Form' );
        $form->save();

        $form_id = $form->get_id();

        /*
         * FIELDS
         */

        for( $i = 1; $i <= $num_fields; $i++ ) {
            $field = Ninja_Forms()->form($form_id)->field()->get();
            $field->update_setting('type', 'textbox')
                ->update_setting('label', 'Field #' . $i)
                ->update_setting('label_pos', 'above')
                ->update_setting('required', 0)
                ->save();
        }
    }

    private function _migrate()
    {
        $migrations = new NF_Database_Migrations();
        $migrations->nuke(TRUE, TRUE);

        $posts = get_posts('post_type=nf_sub&numberposts=-1');
        foreach ($posts as $post) {
            wp_delete_post($post->ID, TRUE);
        }

        $migrations->migrate();
    }

} // END CLASS NF_Database_MockData
