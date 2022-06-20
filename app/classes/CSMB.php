<?php


namespace app\classes;


class CSMB extends Student
{

    public function __construct($data)
    {
        $this->id = $data['id'];
        $this->firstname = $data['firstname'];
        $this->lastname = $data['lastname'];
        $this->grades = $this->setGrades($data['grades']);
    }

    public function isPassed()
    {
        return intval($this->grades[count($this->grades)]) > 8 ? 'Pass' : 'Fail';
    }

    public function show()
    {
        header('Content-type: text/xml');
        $xml =
            "<?xml version='1.0' encoding='UTF-8'?>
            <student>
            <id>$this->id</id>
            <name>$this->firstname $this->lastname</name>
            <grades>" . $this->gradesXML() . "</grades>
            <average>" .$this->getAverage() . "</average>
            <final_rezult>" . $this->isPassed() . "</final_rezult>
            </student>";

        return $xml;
    }

    protected function getAverage()
    {
        return parent::getAverage();
    }

    private function gradesXML()
    {

        $grades = '';
        foreach ($this->grades as $grade){
            $grades .=
                "<grade>$grade</grade>";
        }

        return $grades;
    }

    private function setGrades($grades)
    {
        $grades = explode(',', $grades);

        sort($grades);

        if(count($grades) > 2){
            unset($grades[0]);
        }

        return $grades;
    }
}