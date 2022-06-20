<?php


namespace app\classes;


class CSM extends Student
{
    public function __construct($data)
    {
        $this->id = $data['id'];
        $this->firstname = $data['firstname'];
        $this->lastname = $data['lastname'];
        $this->grades = explode(',', $data['grades']);
    }

    public function isPassed()
    {
        return $this->getAverage() >= 7 ? 'Pass' : 'Fail';
    }

    public function show()
    {
        header('Content-type: application/json');
        return  json_encode([
            'id' => $this->id,
            'name' => $this->firstname . ' ' . $this->lastname,
            'grades' => $this->grades,
            'average' => $this->getAverage(),
            'final_result' => $this->isPassed()
        ]);
    }
}