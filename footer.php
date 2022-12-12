<footer class="uk-background-secondary uk-padding-small">
    <div class="uk-text-center">
        gthanksg, 2022<br>
        <a class="uk-link-heading uk-light" href="#top" uk-scroll id="footer-totop">to top</a>
    </div>
</footer>


<script>
    var translator = new MultiLanguage();
    translator.registerSelect(document.getElementById("get-lang"));
    var xhr = new XMLHttpRequest();
    xhr.open("GET","locales/translations.json");
    xhr.onreadystatechange=(e)=>{
        if(xhr.readyState === 4 && xhr.status === 200)
        {
            var jsonResponse = JSON.parse(xhr.responseText);
            translator.addSheet(jsonResponse);
        }
    }
    xhr.send()
</script>

</body>
</html>