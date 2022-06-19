<?php

class nc_netshop_exchange_handler_import extends nc_netshop_exchange_handler {
    const STATUS_INACTIVITY = 'inactivity';
    const STATUS_IMPORTING = 'in_process';

    protected $date_format = 'Y-m-d H:i:s';

    /**
     * Обновление информации о импорте (устанавливаем информацию что импорт начался)
     */
    public function start($exchange_id) {
        $this->clean();
        $this->set('exchange_id', $exchange_id);
        $this->set('status', self::STATUS_IMPORTING);
        $this->update_date('date_start');
        $this->update_date('date_update');
        $this->set('percent', 0);
        $this->save();
    }

    /**
     * Обновление информации о процессе импорта (процент завершения)
     * @param $percent
     */
    public function update_percent($percent) {
        $this->set('percent', $percent);
        $this->update_date('date_update');
        $this->save();
    }

    /**
     * Обновление информации о завершении импорта
     */
    public function finish() {
        $this->set('status', self::STATUS_INACTIVITY);
        $this->update_date('date_finish');
        $this->update_date('date_update');
        $this->save();
    }

    public function update_percent_by_steps_info($current_step, $steps_count) {
        $this->update_percent(($current_step / $steps_count) * 100);
    }

    public function get_status() {
        return $this->get('status', self::STATUS_INACTIVITY);
    }

    public function get_percent($formatted = false) {
        $percent = $this->get('percent', 0);
        if ($formatted) {
            $percent = floor($percent);
        }
        return $percent;
    }

    public function get_last_import_date($formatted = false) {
        $date_finish = $this->get('date_finish', null);
        if ($date_finish) {
            $time_finish = strtotime($date_finish);
            $date_finish = date('d.m.y H:i', $time_finish);
        }
        return $date_finish;
    }

    protected function update_date($keyword) {
        $this->set($keyword, date($this->date_format));
    }
}