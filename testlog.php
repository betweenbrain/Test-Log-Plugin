<?php defined('_JEXEC') or die;

/**
 * File       testlog.php
 * Created    8/1/14 2:29 PM
 * Author     Matt Thomas | matt@betweenbrain.com | http://betweenbrain.com
 * Support    https://github.com/betweenbrain/
 * Copyright  Copyright (C) 2014 betweenbrain llc. All Rights Reserved.
 * License    GNU GPL v2 or later
 */

/**
 * @package    Joomla.Plugin
 * @subpackage System
 * @version    1.0
 */
class plgSystemTestlog extends JPlugin
{

	/**
	 * Constructor.
	 *
	 * @access protected
	 *
	 * @param object $subject The object to observe
	 * @param array  $config  An array that holds the plugin configuration
	 *
	 * @since  1.0
	 */
	public function __construct(&$subject, $config)
	{
		parent::__construct($subject, $config);

		// Include the JLog class.
		jimport('joomla.log.log');

		/**
		 * Initialise a basic logger with no options (once only).
		 *
		 * JLog won't write to any file, when JLog::add is called, if this isn't called once.
		 *
		 * Array () options:
		 * text_file - allows you to specify the name of the file to which messages are logged.
		 * text_file_path - allows you to specify the folder path to the file to which messages are logged.
		 * text_file_no_php - if set, the PHP die statement will not be added to the file line of the file.
		 * text_entry_format - allows you to change the format of the entire line of the log message in the file.
		 *  {DATETIME} {DATE} {TIME} {CLIENTIP} {PRIORITY} {CATEGORY} {MESSAGE}
		 *
		 * JLog::ALL is the default.
		 * JLog::DEBUG won't be displayed to the user.
		 * JLog::INFO will be displayed to the user.
		 *
		 * More details at http://eddify.me/posts/logging-in-joomla-with-jlog.html
		 */
		JLog::addLogger(array(), JLog::DEBUG);
	}

	/**
	 * After the framework has loaded and initialised and the router has routed the client request.
	 *
	 * @return  void
	 */
	public function onAfterRoute()
	{
		JLog::add(__FUNCTION__, JLog::DEBUG);
	}

	/**
	 * After the framework is loaded and application initialise method has been called.
	 *
	 * @return  void
	 */
	public function onAfterInitialise()
	{
		JLog::add(__FUNCTION__, JLog::DEBUG);
	}

	/**
	 * After the framework has dispatched the application.
	 *
	 * @return  void
	 */
	public function onAfterDispatch()
	{
		JLog::add(__FUNCTION__, JLog::DEBUG);
	}

	/**
	 * Triggered immediately before the framework has rendered the application.
	 *
	 * @return  void
	 */
	public function onBeforeRender()
	{
		JLog::add(__FUNCTION__, JLog::DEBUG);
	}

	/**
	 * After the framework has rendered the application.
	 *
	 * @return  void
	 */
	public function onAfterRender()
	{
		JLog::add(__FUNCTION__, JLog::DEBUG);
	}

}
