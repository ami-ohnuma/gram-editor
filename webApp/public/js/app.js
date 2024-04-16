$(function () {
    $(".lined").linedtextarea({
        selectedLine: ""
    });

    // ドラッグオーバー時のイベント
    $('#drop-area').on('dragover', function (e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).addClass('hover');
    });

    // ドラッグエンター時のイベント
    $('#drop-area').on('dragenter', function (e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).addClass('hover');
    });

    // ドラッグリーブ時のイベント
    $('#drop-area').on('dragleave', function (e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).removeClass('hover');
    });

    // ドロップ時のイベント
    $('#drop-area').on('drop', function (e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).removeClass('hover');

        var files = e.originalEvent.dataTransfer.files;
        // ドロップされたファイルに対する処理を実行
        handleFiles(files);
    });

    // ドロップされたファイルに対する処理を実行する関数
    function handleFiles(files) {
        // ドロップされたファイルの情報を表示
        for (var i = 0; i < files.length; i++) {
            // 添付ファイル名セット
            $('.gram-name').text(files[i].name);

            var reader = new FileReader();
            reader.onload = function (event) {
                var contents = event.target.result;
                $('#textarea').text(contents);
            };

            reader.readAsText(files[i]);
        }
    }
});