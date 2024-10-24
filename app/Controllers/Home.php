<?php

namespace App\Controllers;

use Core\AbstractController;
use Core\Request;
use Core\View;
use Core\Validator;

/**
 * The home controller class.
 *
 * The controller is used to display the dashboard.
 *
 * @author Nguyen Viet Duong
 */
class Home extends AbstractController {

    /**
     * The index controller action
     * 
     * It displays the statistics: 
     *  - The total number of orders, customers and revenue.
     *  - Monthly chart
     *  - Latest 10 orders.
     *
     * @return void
     * @access  public
     * @since   Method available since Release 1.0.0
     */
    public function index(): void {

        // Request params
        $from = Request::getParam("from", date("Y-m-01"));
        $to = Request::getParam("to", date("Y-m-t"));
        $month = Request::getParam("month", date("Y-m"));

        // Statistic counters
//        $modelStatistic = new \App\Models\Statistic();
//        $rows = $modelStatistic->getForDashboard($from, $to);
//
//        // Remove 0 index
//        $statistic = $rows[0];
//
//        // Format revenue
//        $statistic['total_revenue'] = number_format(
//                $statistic['total_revenue'], 2, ".", ",");
//
//        // Graphic data
//        $graphic = $modelStatistic->getMountlyGraphicData($month);
//
//        $mdlOrders = new \App\Models\Order();
//        $orders = $mdlOrders->getLastTen();

        // Render view
        View::render("home");
    }

}
