<?php 
class Cms5c3d9ce26c4ae366370367_12edfe59cd0b054a62594451fc8fb72dClass extends Cms\Classes\PageCode
{
public function onEnd() {
  #dump($this->record);
  $j = json_decode($this->record->attributes['father_profile']);
  $this->page['father_name'] = $j->father_name;
  $this->page['father_degree'] = $j->father_degree;
  $this->page['father_exp'] = $j->father_exp;
  $this->page['father_age'] = $j->father_age;
  $this->page['father_job'] = $j->father_job;
  $this->page['father_addr'] = $j->father_addr;
	$j = json_decode($this->record->attributes['mother_profile']);
  $this->page['mother_name'] = $j->mother_name;
  $this->page['mother_degree'] = $j->mother_degree;
  $this->page['mother_exp'] = $j->mother_exp;
  $this->page['mother_age'] = $j->mother_age;
  $this->page['mother_job'] = $j->mother_job;
  $this->page['mother_addr'] = $j->mother_addr;
  
  $date = explode('-', $this->record->attributes['birth_date']);
  $this->page['birth_date'] = $date[2].'/'.$date[1].'/'.$date[0];
}
}
