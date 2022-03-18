<?php

namespace Joy\VoyagerBreadSubscription\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Setting;

class SettingsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $setting = $this->findSetting('subscription.key1');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('joy-voyager-bread-subscription::seeders.settings.subscription.key1'),
                'value'        => 'Joy Voyager',
                'details'      => '',
                'type'         => 'text',
                'order'        => 1,
                'group'        => 'Subscription',
            ])->save();
        }

        $setting = $this->findSetting('subscription.image');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('joy-voyager-bread-subscription::seeders.settings.subscription.image'),
                'value'        => '',
                'details'      => '',
                'type'         => 'image',
                'order'        => 2,
                'group'        => 'Subscription',
            ])->save();
        }
    }

    /**
     * [setting description].
     *
     * @param [type] $key [description]
     *
     * @return [type] [description]
     */
    protected function findSetting($key)
    {
        return Setting::firstOrNew(['key' => $key]);
    }
}
