# Publication review

Reviewed on 24 October 2026.

## Conclusion

The seven uncertain PNGs and association-related footer phrase have been excluded and replaced with attributed Font Awesome renders and neutral project text. Pickadate is absent. Those asset questions are resolved for this tree.

**pdfmake conclusion: redistribution of the unchanged bundle and VFS is possible with the preserved and supplemented notices.** The notice review is closed; exact historical release numbers remain nonunique for source-identical components and compiler fragments, as explicitly recorded in [PDFMAKE_PROVENANCE.md](PDFMAKE_PROVENANCE.md). No remaining missing/conflicting license was identified. This conclusion concerns pdfmake and does not replace review of project-specific agreements.

The author must also check any applicable TPI, school, association, ownership, or confidentiality agreement. Public websites cannot establish what was agreed for this particular project.

## Seven PNGs

All seven originals in `ressources/style/img/` were replaced: `add.png`, `borrow.png`, `restore.png`, `print.png`, `logo.png`, `defaultBook.png`, and `defaultStudent.png`. No original source URL, author, or redistribution grant could be established from the prepared files or metadata.

[ASSET_PROVENANCE.md](ASSET_PROVENANCE.md) identifies each use, glyph, dimension, attribution, transformation, and old/new SHA-256. Replacements were rendered from the already bundled Font Awesome Free 5.15.3 font. Filenames and dimensions remain the same; icon outlines differ. License texts and attribution are retained. The optional renderer is included; no runtime or Pillow installation is bundled.

All four genuine screenshots were replaced with captures of the revised application, with fictional data and original geometric demonstration cover artwork. The old PNGs and slogan no longer appear in the captures.

## Pickadate: absent

No Pickadate/Pickatime file, banner, initialization call, or script/style reference was found in the application publication tree. Date forms use native date inputs. There is no distributed version to identify or attribute.

The [official upstream license](https://github.com/amsul/pickadate.js/blob/master/LICENSE.md) declares MIT, but does not prove that any unidentified historical copy was bundled. No dependency or license was added just to satisfy this question. The earlier report's actual library issue concerned pdfmake.

## ETML and African Puzzle

No ETML or African Puzzle logo, report, assessment document, or institutional photograph is included. The generic book symbol named `logo.png` is documented above.

The association-related slogan was removed from `view/footer.html`. It now displays “BiblioSolidaire — Projet pédagogique 2025”. The related CSS class was renamed; two unused association-logo rules were removed. This changes wording and artwork, not actions or business rules.

[ETML's legal notice](https://www.etml.ch/mentions-legales) requires prior written permission for reproduction/publication of its website material. It is not proof of ownership of the student's TPI code. No applicable public reuse grant for the Swiss association's slogan/logo was established; unrelated companies with similar names were not treated as permission sources.

Factual README references to ETML, African Puzzle, and the educational brief remain, without endorsement or production-use claims. No permission to redistribute the removed marks/slogan is being relied on. Obtain written permission before restoring them. Separately, verify any agreement governing source publication with ETML/the project contact, and request approval if that agreement requires it.

## Other notices and ownership

[THIRD_PARTY.md](../THIRD_PARTY.md) maps bundled components to licenses. Existing notices are preserved. pdfmake's official 0.2.7 build and embedded Roboto 3.005 fonts were identified. Missing Unicode, SASLprep, Babel-helper and pinned upstream MIT declarations were supplied. The complete evidence and remaining nonunique-version qualifications are listed separately.

No license was created for the author's code. Choosing one remains the author's decision.

## Privacy and executed checks

Publication files contain no original book/student data, real student photos, executable runtime, MySQL data, local credentials, or TPI report. Third-party copyright/author names are retained for attribution. The schema contains category/status reference values only.

The application ran in an isolated temporary copy with PHP 8.0.1 and MySQL 5.7.11 from the original archive and a fresh database. Six pages returned HTTP 200: catalogue, students, book edit, book history, book fallback image, and student fallback/print icon. Their 32 distinct rendered asset URLs loaded locally; all seven PNG URLs returned HTTP 200. The browser confirmed complete fallback/print images with expected intrinsic dimensions. No PHP error/warning/notice/deprecation/parse entry or HTTP 404/500 was found in the session log. The inspected browser console had no warning/error entry.

Four full-page captures were visually inspected and saved without pixel editing. The additional-copy icon has a conditional branch: it was checked by reference and HTTP loading, not by repeating its full workflow.

An initial verification-script assertion expected every PNG in these six rendered pages; the fixture did not exercise every conditional action. The test was corrected to distinguish rendered resources from direct requests for all seven PNGs. This was a test-assumption failure.

Business PHP, JavaScript, routes, SQL, and `docs/VALIDATION.md` retain their baseline hashes. Only visual assets, footer text, associated CSS, documentation, and the optional renderer changed. Prior workflow tests in [VALIDATION.md](VALIDATION.md) were not repeated in full for this visual pass. The application remains unsuitable for direct Internet hosting.

## Publication contents

[PUBLICATION_FILES.txt](PUBLICATION_FILES.txt) lists the intended public files. Temporary audit downloads, runtime, database, demo uploads, logs, and credentials are excluded and removed after verification. Original files outside the prepared directory were not modified. No remote repository was created, no push was made, and nothing was published.

Final file/link/screenshot checks are recorded in [RIGHTS_VALIDATION.json](RIGHTS_VALIDATION.json).

## Final pdfmake export check

Catalogue and student exports were exercised through their unchanged initialization scripts and actual distributed assets in an isolated browser harness with 80 fictional rows each. Both produced valid two-page PDFs. A third PDF exercised all four embedded Roboto variants. All five pages were rendered and inspected; text, accents, row coverage, action-column exclusion and font resources passed. The harness redirected saving to localhost; PHP/MySQL workflows and normal browser downloading were not rerun. [Exact test record](PDFMAKE_EXPORT_TEST.json). All 77 application/resource/tool files retained their before/after hashes. No application behavior or file was changed in this final pass.
