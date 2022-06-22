@if(app()->getLocale() == 'ru')
    <script data-b24-form="inline/2/fpktlg" data-skip-moving="true">
        (function (w, d, u) {
            var s = d.createElement('script');
            s.async = true;
            s.src = u + '?' + (Date.now() / 180000 | 0);
            var h = d.getElementsByTagName('script')[0];
            h.parentNode.insertBefore(s, h);
        })(window, document, 'https://cdn-ru.bitrix24.ru/b17078154/crm/form/loader_2.js');
    </script>
@else
    <script data-b24-form="inline/14/m50nh2" data-skip-moving="true">
        (function (w, d, u) {
            var s = d.createElement('script');
            s.async = true;
            s.src = u + '?' + (Date.now() / 180000 | 0);
            var h = d.getElementsByTagName('script')[0];
            h.parentNode.insertBefore(s, h);
        })(window, document, 'https://cdn-ru.bitrix24.ru/b17078154/crm/form/loader_14.js');
    </script>
@endif
