<?php 

class Validator
{
    private $errors = array();

    public function getErrors ()
    {
        return $this->errors;
    }

    public function validate (Array $data, Array $rules)
    {
        $valid = true;
        foreach ($rules as $item => $ruleset) {
            // required|email|min:8
            $ruleset = explode('|', $ruleset);
            
            foreach ($ruleset as $rule) {
                
                $pos = strpos($rule, ':');
                if ($pos !== false) {
                    $parameter = substr($rule, $pos + 1);
                    $rule = substr($rule, 0, $pos);
                }
                else {
                    $parameter = '';
                }
                
                // validateEmail($item, $value, $param)
                $methodName = 'validate' . ucfirst($rule);
                $value = isset($data[$item]) ? $data[$item] : NULL;
                if (method_exists($this, $methodName)) {
                    $this->$methodName($item, $value, $parameter) OR $valid = false;
                }
            }
        }
        
        return $valid;
    }


    private function validateRequired($item,$value,$parameter)
    {
        if ($value === '' || $value === NUll) {
            $this->errors[$item][] = '该' . $item . '必须填写';
            return false;
        }
        return true;
    }

   private function validateEmail($item, $value, $parameter)
    {
        if (! filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $this->errors[$item][] = '这个 ' . $item . ' 必须填写有效果邮箱';
            return false;
        }
        
        return true;
    }

    private function validateMin($item,$value,$parameter)
    {
        if (strlen($value) >= $parameter == false) {
            $this->errors[$item][] = '这个' . $item . '至少要' . $parameter . '个字符长';
            return false;
        }
        return true;
    }

   



}


 ?>