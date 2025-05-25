<!DOCTYPE html>
<html>
    <head>
        <title>Markdown Render</title>
        <link href="https://cdn.jsdelivr.net/npm/github-markdown-css@5.2.0/github-markdown.min.css" rel="stylesheet">
        <style>
            body {
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
                background: #f5f5f5;
                padding: 2rem;
            }
            .markdown-body {
                max-width: 800px;
                margin: auto;
                background: white;
                padding: 2rem;
                border-radius: 0.5rem;
                box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            }
            .floating-download {
                position: fixed;
                bottom: 24px;
                right: 24px;
                display: inline-flex;
                align-items: center;
                background-color: #1a73e8;
                color: white;
                font-weight: 500;
                font-size: 14px;
                padding: 12px 16px;
                border-radius: 30px;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
                text-decoration: none;
                transition: background 0.3s ease, transform 0.2s ease;
                z-index: 1000;
            }
            .floating-download:hover {
                background-color: #1765cc;
                transform: translateY(-2px);
            }
            .floating-download .icon {
                width: 20px;
                height: 20px;
                margin-right: 8px;
                stroke: white;
            }
        </style>
    </head>

    <body>
        <article class="markdown-body">
            {!! $html !!}
        </article>

        <!-- Floating Download Button -->
        <a href="/download-sow" class="floating-download" title="Download SOW (.docx)">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                <polyline points="7 10 12 15 17 10" />
                <line x1="12" y1="15" x2="12" y2="3" />
            </svg>
            Download SOW
        </a>
    </body>
</html>

