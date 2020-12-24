<?php
defined('C5_EXECUTE') or die("Access Denied.");

class State extends Model {}
Model::ClassHasMany('State', 'Cities','state_id');