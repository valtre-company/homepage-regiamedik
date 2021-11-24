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
      return $number;
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
}