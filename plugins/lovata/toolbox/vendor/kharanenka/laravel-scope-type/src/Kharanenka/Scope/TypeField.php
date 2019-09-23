<?php namespace Kharanenka\Scope;

/**
 * Class TypeField
 * @package Kharanenka\Scope
 * @author Andrey Kharanenka, kharanenka@gmail.com
 *
 * @property string $type
 * 
 * @method static $this getByType(string $sData)
 * @method static $this likeByType(string $sData)
 * @method static $this nullType()
 * @method static $this notNullType()
 */

trait TypeField
{
    /**
     * Get element by type value
     * @param \Illuminate\Database\Eloquent\Builder|\October\Rain\Database\Builder $obQuery
     * @param string $sData
     * @return \Illuminate\Database\Eloquent\Builder|\October\Rain\Database\Builder;
     */
    public function scopeGetByType($obQuery, $sData)
    {
        if(!empty($sData)) {
            $obQuery->where('type', $sData);
        }

        return $obQuery;
    }

    /**
     * Get element like type value
     * @param \Illuminate\Database\Eloquent\Builder|\October\Rain\Database\Builder $obQuery
     * @param string $sData
     * @return \Illuminate\Database\Eloquent\Builder|\October\Rain\Database\Builder;
     */
    public function scopeLikeByType($obQuery, $sData)
    {
        if(!empty($sData)) {
            $obQuery->where('type', 'like', '%'.$sData.'%');
        }

        return $obQuery;
    }

    /**
     * Get element with empty type
     * @param \Illuminate\Database\Eloquent\Builder|\October\Rain\Database\Builder $obQuery
     * @return \Illuminate\Database\Eloquent\Builder|\October\Rain\Database\Builder;
     */
    public function scopeNullType($obQuery)
    {
        return $obQuery->whereNull('type');
    }

    /**
     * Get element with not empty type
     * @param \Illuminate\Database\Eloquent\Builder|\October\Rain\Database\Builder $obQuery
     * @return \Illuminate\Database\Eloquent\Builder|\October\Rain\Database\Builder;
     */
    public function scopeNotNullType($obQuery)
    {
        return $obQuery->whereNotNull('type');
    }
}
