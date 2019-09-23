<?php namespace Kharanenka\Scope;

/**
 * Class HiddenField
 * @package Kharanenka\Scope
 * @author Andrey Kharanenka, kharanenka@gmail.com
 *
 * @property bool $hidden
 * 
 * @method static $this hidden()
 * @method static $this notHidden()
 */

trait HiddenField {

    /**
     * Get hidden elements
     * @param \Illuminate\Database\Eloquent\Builder|\October\Rain\Database\Builder $obQuery
     * @return \Illuminate\Database\Eloquent\Builder|\October\Rain\Database\Builder;
     */
    public function scopeHidden($obQuery) {
        return $obQuery->where('hidden', true);
    }

    /**
     * Get not hidden elements
     * @param \Illuminate\Database\Eloquent\Builder|\October\Rain\Database\Builder $obQuery
     * @return \Illuminate\Database\Eloquent\Builder|\October\Rain\Database\Builder;
     */
    public function scopeNotHidden($obQuery) {
        return $obQuery->where('hidden', false);
    }
}