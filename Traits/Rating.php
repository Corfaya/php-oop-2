<?php
    trait Rating {
        protected $rating;
        public function setRating($_rating) {
            try {
                if(!is_numeric($_rating) || $_rating < 0 || $_rating > 5) {
                    throw new Exception("Valutazione scorretta");
                }
                $this->rating = $_rating."/5";
            } catch (Exception $e) {
                $this->rating = $e->getMessage();
            }
        }

        public function getRating() {
            return $this->rating;
        }
    }
?>