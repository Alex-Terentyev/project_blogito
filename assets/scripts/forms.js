document.querySelectorAll('.count').forEach(
        function(e){
            function countChars(){
                var currentLength = e.value.length;
                var maxLength = e.getAttribute('maxlength');
                e.closest('div').querySelector('.counter').innerHTML = 
                 `${currentLength}/${maxLength}`;

            }
            countChars();
            e.addEventListener('input', countChars);
        }
);
