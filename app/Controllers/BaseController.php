<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Pages extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */

class BaseController extends Controller
{
    /**
     * Bootstrap template to render
     * Override on the fly to change render path
     * possible values:
     * Bootstrap-Example Templates: album | blog | carousel | checkout | cover | dashboard | jumbotron | pricing | product | signin | stickyfooter | stickyfooternav
     * Other Templates: sbadmin2
     * @var string
     */
    public $bootstrapTemplate = 'dashboard';

    /**
     * Bootstrap theme
     * (not every template supports theme by default)
     * light | dark
     * @var string
     */
    public $bootstrapTheme = 'dark';

    /**
     * Bootstrap navigation bar
     * Override to change navigation (default uses template navigation if it exists)
     * possible values:
     * default | top_static | top_fixed | bottom
     * @var string
     */
    public $bootstrapNav = 'default';

    /**
     * Bootstrap navigation bar individual scripts to load
     * Define if css|js should load automatically for an individual navigation
     * @var \string[][]
     */
    public $bootstrapNavScripts = array(
        'top_static' => ['css'],
        'top_fixed' => ['css'],
        'bottom' => ['css']
    );

	/**
	 * Instance of the main Request object.
	 *
	 * @var IncomingRequest|CLIRequest
	 */
	protected $request;

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
	 *
	 * @param RequestInterface  $request
	 * @param ResponseInterface $response
	 * @param LoggerInterface   $logger
	 */
	public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.: $this->session = \Config\Services::session();

	}

    public function view($page = 'home')
    {
        if ( ! is_file(APPPATH.'/Views/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $data['theme'] = $this->bootstrapTheme;
        $data['content'] =  view($page, $data);

        $data['navbar'] = $this->bootstrapNav;
        if($this->bootstrapNav != 'default') {
            $data['navbar_css'] = in_array('css',$this->bootstrapNavScripts[$this->bootstrapNav]);
            $data['navbar_js'] = in_array('js',$this->bootstrapNavScripts[$this->bootstrapNav]);
        }

        // template chunks:

        // head <head>
        echo view('templates/'.$this->bootstrapTemplate.'/head', $data);
        // sidebar <nav>
        if (is_file(APPPATH.'/Views/templates/'.$this->bootstrapTemplate.'/sidebar.php')) {
            echo view('templates/'.$this->bootstrapTemplate.'/sidebar', $data);
        }
        // navigation <nav>
        if($this->bootstrapNav == 'default') {
            if (is_file(APPPATH.'/Views/templates/'.$this->bootstrapTemplate.'/nav.php')) {
                echo view('templates/'.$this->bootstrapTemplate.'/nav', $data);
            }
        } else {
            if (is_file(APPPATH.'/Views/sections/navigation/nav_'.$this->bootstrapNav.'.php')) {
                echo view('sections/navigation/nav_'.$this->bootstrapNav, $data);
            } else {
                // Individual navigation file does not exist
                throw new \CodeIgniter\Exceptions\PageNotFoundException('sections/navigation/nav_'.$this->bootstrapNav.'.php');
            }
        }
        // content <main>
        if (is_file(APPPATH.'/Views/templates/'.$this->bootstrapTemplate.'/main.php')) {
            echo view('templates/'.$this->bootstrapTemplate.'/main', $data);
        }
        // footer <footer>
        echo view('templates/'.$this->bootstrapTemplate.'/footer', $data);
    }
}
