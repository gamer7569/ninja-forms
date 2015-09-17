<?php if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Class NF_Action_Email
 */
final class NF_Actions_Email extends NF_Abstracts_Action
{
    /**
    * @var string
    */
    protected $_name  = '';

    /**
    * @var array
    */
    protected $_tags = array();

    /**
    * @var string
    */
    protected $_timing = 'normal';

    /**
    * @var int
    */
    protected $_priority = '10';

    /**
    * Constructor
    */
    public function __construct()
    {

    }

    /*
    * PUBLIC METHODS
    */

    public function save()
    {

    }

    public function process( $data )
    {
        wp_mail( 'kyle@wpninjas.com', 'Ninja Forms 3.0 - Email Action', 'This is a test.' );
    }
}
