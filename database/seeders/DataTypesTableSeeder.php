<?php

namespace Joy\VoyagerBreadSubscription\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'subscriptions');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'subscriptions',
                'display_name_singular' => __('joy-voyager-bread-subscription::seeders.data_types.subscription.singular'),
                'display_name_plural'   => __('joy-voyager-bread-subscription::seeders.data_types.subscription.plural'),
                'icon'                  => 'voyager-bread voyager-bread-subscription voyager-wand',
                'model_name'            => 'Joy\\VoyagerBreadSubscription\\Models\\Subscription',
                // 'policy_name'           => 'Joy\\VoyagerBreadSubscription\\Policies\\SubscriptionPolicy',
                // 'controller'            => 'Joy\\VoyagerBreadSubscription\\Http\\Controllers\\VoyagerBreadSubscriptionController',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
