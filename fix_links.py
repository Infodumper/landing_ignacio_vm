import os, glob, re

root = r'c:\TGPN\web_personal'
html_files = glob.glob(os.path.join(root, '**', '*.html'), recursive=True)

links = {
    '/': '/index.html',
    '/soluciones': '/soluciones/index.html',
    '/casos': '/casos/index.html',
    '/blog': '/blog/index.html',
    '/sobre-mi': '/sobre-mi.html',
    '/contacto': '/contacto.html',
    '/soluciones/sistemas-empresariales': '/soluciones/sistemas-empresariales.html',
    '/soluciones/business-intelligence': '/soluciones/business-intelligence.html',
    '/soluciones/inteligencia-artificial': '/soluciones/inteligencia-artificial.html',
    '/soluciones/consultoria': '/soluciones/consultoria.html',
    '/casos/crm-fidelizacion': '/casos/crm-fidelizacion.html',
    '/casos/dashboard-comercial': '/casos/dashboard-comercial.html',
    '/casos/consola-cognitiva': '/casos/consola-cognitiva.html',
    '/blog/arquitectura': '/blog/arquitectura.html',
    '/blog/inteligencia-artificial': '/blog/inteligencia-artificial.html',
    '/blog/business-intelligence': '/blog/business-intelligence.html',
    '/blog/casos-reales': '/blog/casos-reales.html'
}

for file_path in html_files:
    with open(file_path, 'r', encoding='utf-8') as f:
        content = f.read()

    rel_dir = os.path.relpath(os.path.dirname(file_path), root)
    if rel_dir == '.':
        depth = 0
        prefix = ''
    else:
        depth = len(rel_dir.split(os.sep))
        prefix = '../' * depth

    # sort links by length descending to prevent partial replacements (e.g. /casos vs /casos/algo)
    for abs_link in sorted(links.keys(), key=len, reverse=True):
        abs_html_link = links[abs_link]
        
        if abs_html_link == '/index.html':
            rel_html_link = prefix + 'index.html'
        else:
            rel_html_link = prefix + abs_html_link.lstrip('/')
        
        # Replace href="..."
        pattern = r'href="' + abs_link + r'"'
        replacement = 'href="' + rel_html_link + '"'
        content = re.sub(pattern, replacement, content)
        
    with open(file_path, 'w', encoding='utf-8') as f:
        f.write(content)

print('Links updated successfully.')
