<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // ========================== 1 ==========================
        abstract class BaseClass {
            protected $propertyOne;
            protected $propertyTwo;

            public function getPropertyOne() {
                return $this->propertyOne;
            }

            public function setPropertyOne($value) {
                $this->propertyOne = $value;
            }

            public function getPropertyTwo() {
                return $this->propertyTwo;
            }

            public function setPropertyTwo($value) {
                $this->propertyTwo = $value;
            }
            abstract protected function power($base, $exponent);
        }

    // ========================== 2 ==========================
        class ChildOne extends BaseClass {
            private $ownProperty;
        
            public function getOwnProperty() {
                return $this->ownProperty;
            }
        
            public function setOwnProperty($value) {
                $this->ownProperty = $value;
            }
        
            protected function power($base, $exponent) {
                return pow($base, $exponent);
            }
        
            public function addProperties() {
                return $this->propertyOne + $this->propertyTwo + $this->ownProperty;
            }
        }
        
        final class ChildTwo extends BaseClass {
            private $ownProperty;
        
            public function getOwnProperty() {
                return $this->ownProperty;
            }
        
            public function setOwnProperty($value) {
                $this->ownProperty = $value;
            }
        
            protected function power($base, $exponent) {
                return pow($base, $exponent);
            }
        
            public function multiplyProperties() {
                return $this->propertyOne * $this->propertyTwo * $this->ownProperty;
            }
        }
        
        class ChildThree extends BaseClass {
            private $ownProperty;
        
            public function getOwnProperty() {
                return $this->ownProperty;
            }
        
            public function setOwnProperty($value) {
                $this->ownProperty = $value;
            }
        
            protected function power($base, $exponent) {
                return pow($base, $exponent);
            }
        
            public function subtractProperties() {
                return $this->propertyOne - $this->propertyTwo - $this->ownProperty;
            }
        }
    
        // ========================== 3 ==========================
        class GrandchildOne extends ChildOne {
            private $extraProperty;
        
            public function getExtraProperty() {
                return $this->extraProperty;
            }
        
            public function setExtraProperty($value) {
                $this->extraProperty = $value;
            }
        
            public function additionalMathAction() {
                return $this->propertyOne / $this->extraProperty;
            }
        }
        
        class GrandchildTwo extends ChildOne {
            private $extraProperty;
        
            public function getExtraProperty() {
                return $this->extraProperty;
            }
        
            public function setExtraProperty($value) {
                $this->extraProperty = $value;
            }
        
            public function anotherMathAction() {
                return $this->getPropertyTwo() * $this->extraProperty;
            }
        }
    ?>
</body>

</html>