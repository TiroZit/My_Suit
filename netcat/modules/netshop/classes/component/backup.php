<?php
/**
 *
 */
class nc_netshop_component_backup extends nc_netshop_backup {

    /**
     * @param string $type
     * @param int $id
     */
    public function export($type, $id) {
    }

    /**
     * @param string $type
     * @param int $id
     */
    public function import($type, $id) {
        if ($type != 'site') {
            return;
        }

        $nc_core = nc_core::get_object();
        $db = $nc_core->db;

        // Сопоставление полей в компоненте nc_module_netshop_aggregator
        try {
            $aggregator_component_id = $nc_core->component->get_by_id('netcat_module_netshop_aggregator', 'Class_ID');

            $aggregator_infoblock_ids = join(', ', $db->get_col(
                "SELECT `Sub_Class_ID`
                   FROM `Sub_Class`
                  WHERE `Catalogue_ID` = $id
                    AND `Class_ID` = $aggregator_component_id"
            )) ?: 0;

            $aggregator_objects = (array)$db->get_results(
                "SELECT `Message_ID`, `Goods_Class_ID`, `Goods_Message_ID`
                   FROM `Message$aggregator_component_id`
                  WHERE `Sub_Class_ID` IN ($aggregator_infoblock_ids)",
                ARRAY_A
            );

            foreach ($aggregator_objects as $aggregator_object) {
                $new_component_id = $this->dumper->get_dict('Class_ID', $aggregator_object['Goods_Class_ID']);
                $new_object_id = $this->dumper->get_dict("Message{$new_component_id}.Message_ID", $aggregator_object['Goods_Message_ID']);
                $db->query(
                    "UPDATE `Message$aggregator_component_id`
                        SET `Goods_Class_ID` = $new_component_id,
                            `Goods_Message_ID` = $new_object_id
                      WHERE `Message_ID` = $aggregator_object[Message_ID]"
                );
            }
        } catch (Exception $e) {
            // нет компонента-агрегатора товаров
        }
    }

}