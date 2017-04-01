<?php
/**
 * @file Throwable.php
 *
 * @author Rob van den Hout <vdhout@studyportals.eu>
 * @version 1.0.0
 * @copyright © 2015 StudyPortals B.V., all rights reserved.
 */

if(version_compare(PHP_VERSION, '7.0.0RC1') >= 0){

	/**
	 * Class PHP7CompatibleException.
	 */
	class PHP7CompatibleException extends Exception{}

	/**
	 * Class PHP7CompatibleErrorException.
	 */
	class PHP7CompatibleErrorException extends ErrorException{}
}
else{

	/**
	 * Interface Throwable.
	 */
	interface Throwable{}

	/**
	 * Class PHP7CompatibleException.
	 */
	class PHP7CompatibleException extends Exception implements Throwable{}

	/**
	 * Class PHP7CompatibleErrorException.
	 */
	class PHP7CompatibleErrorException extends ErrorException implements Throwable{}
}