# Local validation before publication

Validation used a temporary copy of this repository, PHP 8.0.1 and MySQL 5.7.11 copied from the original UwAmp archive, and a newly initialized MySQL data directory. No original MySQL data or personal records were loaded. All test records were fictional. The test services were bound to localhost and stopped after the checks.

## Results

- **PHP syntax:** all 23 PHP files passed `php -l` with the isolated PHP 8.0.1 CLI.
- **Database:** `database/schema.sql` imported successfully into an empty MySQL 5.7.11 database. It created `book`, `category`, `loan`, `status`, and `student`. There were no book, student, or loan rows; seven category and four status reference rows were present.
- **Configuration:** the app connected using `BIBLIO_DB_HOST`, `BIBLIO_DB_PORT`, `BIBLIO_DB_NAME`, `BIBLIO_DB_USER`, and `BIBLIO_DB_PASSWORD`. Missing user/password variables caused a clear failure.
- **Isolated HTTP checks:** 30 of 30 checks passed. They covered server startup, catalogue and student pages, forms and details, book/student creation and editing, deletion of records without loans, borrowing, overdue detection, returns, valid JPEG uploads and replacement, invalid JPEG rejection with HTTP 400, the disabled export route, and local delivery of DataTables assets. The PHP test log contained no notices, warnings, parse errors, or fatal errors.
- **Browser checks:** catalogue and student search worked. Catalogue sort order changed when the title heading was clicked. A status filter changed the visible book rows. The catalogue PDF export produced a valid one-page PDF containing the fictional book; it was rendered and inspected, then the test download was removed. The browser console was clear after fixing the book-form script guard.
- **Local assets:** all stylesheet and script URLs observed on the tested page were relative local paths. No external asset URL was found in the inspected page. A physically disconnected network test was not performed.
- **Git ignore rules:** a temporary local Git repository confirmed that generated book/student JPEGs are ignored while `.gitkeep`, `database/schema.sql`, and `README.md` remain eligible for tracking. No Git repository or remote was created in this project folder.

## Scope and remaining limitations

These checks confirm the tested paths on the original-era PHP/MySQL versions; they do not prove compatibility with current releases or every UI branch. The app has no authentication, complete CSRF protection, or authorization model. Some state changes still use GET links, and output encoding is not consistently applied in all templates. Keep it on a trusted local development machine. Do not deploy it as a public service.

The original SQL import/export interface required bundled MySQL executables. A safe replacement would need authenticated backup/restore controls, SQL validation or a constrained format, and image backup/restore. That work exceeds a simple, testable repair, so the feature remains disabled in this copy.

Before public source publication, review third-party license texts and attributions, decide whether to grant a license for the original code, and separately review any report, screenshots, or sample data for publication rights and privacy. A broader security review is needed before any hosted deployment.
