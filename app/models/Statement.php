<?php

use Jenssegers\Mongodb\Model as Eloquent;

class Statement extends Eloquent {

  /**
   * Our MongoDB collection used by the model.
   *
   * @var string
   */
  protected $collection = 'statements';

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $hidden = array('_id', 'created_at', 'updated_at');

  /**
   * All statements belong to an LRS
   *
   **/
  public function lrs(){
    return $this->belongsTo('Lrs');
  }

}