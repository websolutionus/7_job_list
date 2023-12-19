<?php
namespace App\Services;


class Notify {

    // Created Notification
    static function createdNotification() {
        return notify()->success('Created Successfully', 'Success!');
    }

    // Updated Notification
    static function UpdatedNotification() {
        return notify()->success('Updated Successfully', 'Success!');
    }

}
