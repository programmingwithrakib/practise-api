<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism-themes/1.9.0/prism-atom-dark.min.css" integrity="sha512-GZPS1oCebjx8g/ZkrTTvWirW+4wDkzIsilUQPXcZzuDpDzoH5brM2AojiFjo6ObIWeM68ZDostvdjaS9MNYCTg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/prism.min.js"></script>

    <style>
        /* Markdown Content Wrapper */
        .markdown-content {
            font-family: 'Georgia', 'Times New Roman', serif;
            line-height: 1.8;
            color: #333;
            background-color: #fdfdfd;
            padding: 20px;
            margin: 20px auto;
            max-width: 800px;
            border: 1px solid #eaeaea;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Headings */
        .markdown-content h1,
        .markdown-content h2,
        .markdown-content h3,
        .markdown-content h4,
        .markdown-content h5,
        .markdown-content h6 {
            font-weight: bold;
            margin-top: 0.5em;
            margin-bottom: 0.5em;
            color: #2c3e50;
            border-bottom: 1px solid #eaeaea;
            padding-bottom: 0.3em;
        }
        .markdown-content h1 { font-size: 2.5em; }
        .markdown-content h2 { font-size: 2em; }
        .markdown-content h3 { font-size: 1.75em; }
        .markdown-content h4 { font-size: 1.5em; }
        .markdown-content h5 { font-size: 1.25em; }
        .markdown-content h6 { font-size: 1em; }

        /* Paragraphs */
        .markdown-content p {
            margin: 1em 0;
            color: #555;
        }

        /* Blockquotes */
        .markdown-content blockquote {
            font-style: italic;
            color: #6c757d;
            border-left: 5px solid #3498db;
            padding-left: 15px;
            margin: 1.5em 0;
            background-color: #f7faff;
            border-radius: 5px;
        }

        /* Lists */
        .markdown-content ul,
        .markdown-content ol {
            margin: 1em 0;
            padding-left: 40px;
        }
        .markdown-content ul li,
        .markdown-content ol li {
            margin-bottom: 0.5em;
        }
        .markdown-content ul li::marker {
            color: #3498db;
        }

        /* Links */
        .markdown-content a {
            color: #3498db;
            text-decoration: none;
            border-bottom: 1px dashed #3498db;
            transition: all 0.3s ease;
        }
        .markdown-content a:hover {
            color: #1d6fa5;
            border-bottom: 1px solid #1d6fa5;
        }

        /* Code Blocks */

        .markdown-content p code, .markdown-content tr code, .markdown-content li code{
            background-color: #f4f4f4;
            padding: 2px 5px;
            border-radius: 4px;
            color: #e74c3c;
        }

        /* Tables */
        .markdown-content table {
            width: 100%;
            border-collapse: collapse;
            margin: 1em 0;
            font-size: 0.95em;
        }
        .markdown-content th,
        .markdown-content td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        .markdown-content th {
            background-color: #f4f4f4;
            font-weight: bold;
        }

        /* Images */
        .markdown-content img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 1em 0;
            border-radius: 5px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

    </style>
    <title>Document</title>
</head>
<body>
    <div class="markdown-content">
        {!! $content !!}
    </div>
</body>
</html>
