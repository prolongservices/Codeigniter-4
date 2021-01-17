<?php

namespace App\Controllers;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */

use App\Models\AdminModel;
use CodeIgniter\Controller;

class BaseController extends Controller
{

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = [];

	/**
	 * Constructor.
	 */
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.:
		// $this->session = \Config\Services::session();
	}

	public function sendNotification($title, $body)
	{
		$adminModel = new AdminModel();
		$admin = $adminModel->find(1);
		$headers = [
			'Authorization: key=AAAAgGwFA6A:APA91bG5Qfvqf50pieYk32ONjLbCgK4D8IO-ANDgmXjEwb8eNi9Fu71QJQVqW9kYmF2BOY0Cr-w2uYkvYiunxSENCSPtfxjMr3WXI6wpAPWPwFEuVpmVOE6gIBBf_ds4rfINEHFyGH2L',
			'Content-Type: application/json'
		];
		$notification = [
			'title' => $title,
			'body' => $body,
			
		];
		$request = [
			'data' => $notification,
			'registration_ids' => array($admin['token'])
		];
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($request));

		$res = curl_exec($ch);

		curl_close($ch);
		return '1';
	}
}
