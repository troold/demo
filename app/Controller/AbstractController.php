<?php

namespace Plugin_Name\App\Controller;

use Plugin_NameVendor\PWPF\Controller\Controller;


/**
 * Blueprint for Admin related Controllers. All Admin Controllers should extend this BaseController
 */
abstract class AbstractController extends Controller
{

    public function start()
    {
        $this->view = new \Plugin_Name\App\View\View();
    }

    /**
     * Register callbacks for actions and filters. Most of your add_action/add_filter
     * go into this method.
     *
     * NOTE: register_hook_callbacks method is not called automatically. You
     * as a developer have to call this method where you see fit. For Example,
     * You may want to call this in constructor, if you feel hooks/filters
     * callbacks should be registered when the new instance of the class
     * is created.
     *
     * The purpose of this method is to set the convention that first place to
     * find add_action/add_filter is register_hook_callbacks method.
     *
     * @since    1.0.0
     */
    abstract protected function registerHookCallbacks();


}
