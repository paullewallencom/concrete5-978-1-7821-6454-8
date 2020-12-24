<?php
defined('C5_EXECUTE') or die("Access Denied.");

class City extends Model {}
Model::ClassBelongsTo('City','State','state_id','id');