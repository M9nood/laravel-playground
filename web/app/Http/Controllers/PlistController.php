<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlistController extends Controller
{
    //
    public function createPlist(){
        $str = '<?xml version="1.0" encoding="UTF-8"?>
        <!DOCTYPE plist PUBLIC "-//Apple//DTD PLIST 1.0//EN" "http://www.apple.com/DTDs/PropertyList-1.0.dtd">
        <plist version="1.0">
        <dict>
            <key>items</key>
            <array>
                <dict>
                    <key>assets</key>
                    <array>
                        <dict>
                            <key>kind</key>
                            <string>software-package</string>
                            <key>url</key>
                            <string>https://s3-ap-southeast-1.amazonaws.com/download.foodstory.co/IxxaBFJOCdoqazDgPoiUa5RsBHef59PC/Wongnai_POS_Beta.ipa</string>
                        </dict>
                        <dict>
                            <key>kind</key>
                            <string>display-image</string>
                            <key>url</key>
                            <string>https://s3.amazonaws.com/foodstory/customer_app_icon.png</string>
                        </dict>
                        <dict>
                            <key>kind</key>
                            <string>full-size-image</string>
                            <key>url</key>
                            <string>https://s3.amazonaws.com/foodstory/customer_app_icon.png</string>
                        </dict>
                    </array>
                    <key>metadata</key>
                    <dict>
                        <key>bundle-identifier</key>
                        <string>com.wongnai.pos</string>
                        <key>bundle-version</key>
                        <string>1.0</string>
                        <key>kind</key>
                        <string>software</string>
                        <key>title</key>
                        <string>Wongnai POS</string>
                    </dict>
                </dict>
            </array>
        </dict>
        </plist>';
        Storage::disk('upload')->put('info.txt', $str);
    }
}
