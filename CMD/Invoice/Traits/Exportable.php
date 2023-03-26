<?php 

namespace CMD\Invoice\Traits;

trait Exportable {

    /**
     * Export all variables
     *
     * @return array
     */
    public function exportAllVariables()
    {
        return get_object_vars($this);
    }
}