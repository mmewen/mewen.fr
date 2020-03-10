#!/usr/bin/env python3

from pathlib import Path
import re, unicodedata, os

KIRBY_TALE_ROOT = Path("content/conte")
RAW_TALE_ROOT = Path("tale")
KIRBY_SEPARATOR = """

----

"""

def strip_accents(s):
   return ''.join(c for c in unicodedata.normalize('NFD', s)
                  if unicodedata.category(c) != 'Mn')

# Delete chapters (= folders) in tale folder
chapters = [item for item in KIRBY_TALE_ROOT.iterdir() if item.is_dir()]
for chapter in chapters:
	for file in chapter.iterdir():
		file.unlink()
	chapter.rmdir()

# Create and copy chapters
chapter_files = [file for file in RAW_TALE_ROOT.iterdir() if file.is_file() and re.match('\d+ - \w.*\w\.md', file.name)]
chapter_files.sort()
item_index = 1
for chapter_file in chapter_files:
	match = re.search(' (\w.*\w)', chapter_file.stem)
	if match:
		# Fetch content
		title = match.groups()[0]
		normalized_chapter_name = ''.join(e for e in strip_accents(title).lower() if e.isalnum())
		with chapter_file.open() as f:
			markdown_text = f.read()

		# Make chapter
		chapter_content = {
			'Title': title,
			'Text': markdown_text
		}

		# Make folder and file
		chapter_folder = KIRBY_TALE_ROOT/(str(item_index) + "_" + normalized_chapter_name)
		print(chapter_folder.stem)
		chapter_folder.mkdir(mode=0o755)
		chapter_file = chapter_folder/"blog-post.txt"
		with chapter_file.open("w") as f:
			file_content = [ field_name + ": " + field_value for field_name, field_value in chapter_content.items() ]
			file_content = KIRBY_SEPARATOR.join(file_content)
			os.chmod(chapter_file, 0o644)
			f.write(file_content)

		item_index = item_index + 1
	else:
		print("There's a problem with ", chapter_file.stem)
		print(match)
		exit(1)