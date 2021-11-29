<?php
namespace App\Helpers;

use App\Models\Category;
use App\Models\Service;
use App\Models\ServiceType;

class Helper {

   

   public static function formatMoney($number, $fractional=false) {
      if ($fractional) {
         $number = sprintf('%.2f', $number);
      }
      while (true) {
         $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
         if ($replaced != $number) {
            $number = $replaced;
         } else {
            break;
         }
      }
      return "$" . $number . " MXN";
   }

   public static function get_services_by_category($category_id) {
      $services = Service::where('category_id', $category_id)->get();
      return $services;
   }

   public static function get_service_by_id($service_id) {
      $service = Service::find($service_id);
      return $service;
   }

   public static function get_service_by_slug($slug) {
      $service = Service::where('slug', $slug)->first();
      return $service;
   }

   public static function get_service_type_by_id($service_type_id) {
      $service_type = ServiceType::find($service_type_id);
      return $service_type;
   }

   public static function get_service_type_by_slug($slug) {
      $service_type = ServiceType::where('slug', $slug)->first();
      return $service_type;
   }

   public static function get_service_types() {
      $service_types = ServiceType::all();
      return $service_types;
   }

   public static function get_categories() {
      $categories = Category::all();
      return $categories;
   }

   public static function get_category_by_id($category_id) {
      $category = Category::find($category_id);
      return $category;
   }

   public static function get_category_by_slug($slug) {
      $category = Category::where('slug', $slug)->first();
      return $category;
   }

   public static function get_category_services($category_id) {
      $services = Service::where('category_id', $category_id)->get();
      return $services;
   }

   public static function get_service_types_by_category($category_id) {
      $service_types = ServiceType::where('category_id', $category_id)->get();
      return $service_types;
   }

   public static function get_service_type_services($service_type_id) {
      $services = Service::where('service_type_id', $service_type_id)->get();
      return $services;
   }

   public static function leadTimes() : array {
      return [
         '15 minutes' => '15 minutos',
         '30 minutes' => '30 minutos',
         '45 minutes' => '45 minutos',
         '1 hour' => '1 hora',
         '1.5 hours' => '1.5 horas',
         '2 hours' => '2 horas',
         '2.5 hours' => '2.5 horas',
         '3 hours' => '3 horas',
         '3.5 hours' => '3.5 horas',
         '4 hours' => '4 horas',
         '4.5 hours' => '4.5 horas',
         '5 hours' => '5 horas',
         '5.5 hours' => '5.5 horas',
         '6 hours' => '6 horas',
         '6.5 hours' => '6.5 horas',
         '7 hours' => '7 horas',
         '7.5 hours' => '7.5 horas',
         '8 hours' => '8 horas',
         '8.5 hours' => '8.5 horas',
         '9 hours' => '9 horas',
         '9.5 hours' => '9.5 horas',
         '10 hours' => '10 horas',
         '10.5 hours' => '10.5 horas',
         '11 hours' => '11 horas',
         '11.5 hours' => '11.5 horas',
         '12 hours' => '12 horas',
         '12.5 hours' => '12.5 horas',
         '13 hours' => '13 horas',
         '13.5 hours' => '13.5 horas',
         '14 hours' => '14 horas',
         '14.5 hours' => '14.5 horas',
         '15 hours' => '15 horas',
         '15.5 hours' => '15.5 horas',
         '16 hours' => '16 horas',
         '16.5 hours' => '16.5 horas',
         '17 hours' => '17 horas',
         '17.5 hours' => '17.5 horas',
         '18 hours' => '18 horas',
         '18.5 hours' => '18.5 horas',
         '19 hours' => '19 horas',
         '19.5 hours' => '19.5 horas',
         '20 hours' => '20 horas',
         '20.5 hours' => '20.5 horas',
         '21 hours' => '21 horas',
         '21.5 hours' => '21.5 horas',
         '22 hours' => '22 horas',
         '22.5 hours' => '22.5 horas',
         '23 hours' => '23 horas',
         '23.5 hours' => '23.5 horas',
         '1 day' => '1 día',
         '2 days' => '2 días',
         '3 days' => '3 días',
         '4 days' => '4 días',
         '5 days' => '5 días',
         '6 days' => '6 días',
         '7 days' => '7 días',
         '8 days' => '8 días',
         '9 days' => '9 días',
         '10 days' => '10 días',
         '11 days' => '11 días',
         '12 days' => '12 días',
         '13 days' => '13 días',
         '14 days' => '14 días',
         '15 days' => '15 días',
         '16 days' => '16 días',
         '17 days' => '17 días',
         '18 days' => '18 días',
         '19 days' => '19 días',
         '20 days' => '20 días',
         '21 days' => '21 días',
         '22 days' => '22 días',
         '23 days' => '23 días',
         '24 days' => '24 días',
         '25 days' => '25 días',
         '26 days' => '26 días',
         '27 days' => '27 días',
         '28 days' => '28 días',
         '29 days' => '29 días',
         '1 month' => '1 mes',
         '2 months' => '2 meses',
         '3 months' => '3 meses',
         '4 months' => '4 meses',
         '5 months' => '5 meses',
         '6 months' => '6 meses',
         '7 months' => '7 meses',
         '8 months' => '8 meses',
         '9 months' => '9 meses',
         '10 months' => '10 meses',
         '11 months' => '11 meses',
         '12 months' => '12 meses',                                           
      ];
   }
}