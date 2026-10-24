# BiblioSolidaire

## Project overview

BiblioSolidaire is a school library management application built with PHP and MySQL. It runs on a local server, with its interface assets bundled for use without an Internet connection.

This is a historical educational project from 2025, intended for portfolio review and local exploration. It must not be exposed directly to the Internet.

## Context and objectives

I developed BiblioSolidaire in May 2025 at ETML as my individual final practical project (TPI) for the Swiss Federal VET Diploma in IT (CFC d'informaticien). The brief addressed a library management need expressed within a project for the African Puzzle association in Benin.

The objective was to manage books, students, and loans where Internet access could not be assumed. This repository presents the school project; no production deployment or operational use in Benin is claimed.

## Screenshots

These are actual captures of the prepared application running locally. All people, schools, books, authors, publishers, and loans shown are fictional. The demonstration cover was created from simple geometric shapes; no real student photograph is used. The interface icons were replaced with attributed Font Awesome renders and the footer uses neutral project text. See [capture notes](docs/screenshots/README.md) and [asset provenance](docs/ASSET_PROVENANCE.md).

| Catalogue | Student management |
| --- | --- |
| ![Book catalogue with fictional records](docs/screenshots/catalogue.jpg) | ![Student management with fictional records](docs/screenshots/students.jpg) |
| **Book editing form** | **Book details and loan history** |
| ![Book editing form and image cropping](docs/screenshots/book-form.jpg) | ![Book details with fictional loan history](docs/screenshots/book-history.jpg) |

## Key features

Available in this GitHub preparation:

- Book catalogue, categories, availability states, and book details
- Student records, validity dates, and optional images
- Loans, returns, loan histories, and overdue status updates
- Table search, sorting, status filters, and PDF export
- Browser image cropping and validated JPEG storage

The original TPI also included SQL import/export through bundled Windows MySQL executables. That feature is disabled in this copy. Use a separate local MySQL administration tool for database backups and restores; the original SQL import did not restore uploaded images.

## Technologies

- PHP with PDO and MySQL
- HTML, CSS, and JavaScript
- Bootstrap 4 and the SB Admin 2 theme
- jQuery, DataTables, pdfmake, Cropper.js, and Font Awesome

The prepared application was validated with PHP 8.0.1 and MySQL 5.7.11 from the original environment. These versions describe the historical test setup; current releases remain unverified. See [third-party notices](THIRD_PARTY.md).

## Architecture

The existing MVC structure is preserved:

```text
index.php             Application entry point
routes/               Controller and action selection
controller/           Application actions
model/                PDO data access and image validation
view/                 Templates, forms, and pages
ressources/           Local CSS, JavaScript, fonts, and image folders
database/schema.sql   Empty schema with category/status reference values
docs/                 Validation notes and genuine demo screenshots
licenses/             Third-party license texts and notices
```

## Local installation

1. Use a local PHP installation with PDO MySQL and standard image information functions, plus a local MySQL server. The original UwAmp installation is not required in this repository.
2. Create a database named `db_bibliosolidaire` using `utf8mb4`, create a dedicated local database user with access to it, and import [database/schema.sql](database/schema.sql) through your MySQL client or administration tool. It contains no book, student, or loan records.
3. Set your own local connection values in the PowerShell session that will start PHP:

   ```powershell
   $env:BIBLIO_DB_HOST = '127.0.0.1'
   $env:BIBLIO_DB_PORT = '3306'
   $env:BIBLIO_DB_NAME = 'db_bibliosolidaire'
   $env:BIBLIO_DB_USER = 'your_local_user'
   $env:BIBLIO_DB_PASSWORD = 'your_local_password'
   ```

4. From the repository root, start the development server:

   ```powershell
   php -S 127.0.0.1:8000
   ```

5. Open `http://127.0.0.1:8000/`. PHP needs write access to `ressources/img/book/` and `ressources/img/student/` for newly added images. Generated images are ignored by Git.

The screenshot data is intentionally absent from the database script. Installation starts with an empty catalogue and student list.

## Known limitations

- **Local educational use only:** no authentication or authorization model, incomplete CSRF protection, some state changes through GET links, and inconsistent output encoding in templates. Do not expose the application directly to the Internet.
- SQL import/export is disabled. A future restore workflow would also need to handle images and validate the accepted backup format.
- Compatibility with current PHP/MySQL versions and every UI branch has not been established.
- Tests covered the principal local workflows with fictional data, including deletion of records without associated loans. See [the validation report](docs/VALIDATION.md) for the exact scope.
- Assets required by the tested interface are local. A test with the computer physically disconnected from the Internet was not performed.

## Project background

This was a personal school project developed within the time constraints of the TPI. The prepared repository preserves its MVC application and documents changes made for review, reproducibility, and privacy.

The complete TPI report is not included. Any later report or screenshot additions require a separate privacy and publication-rights review. No license has been selected for the original project code. The seven uncertain interface images and association-related slogan have been replaced. The remaining pdfmake notice review and any project-specific source-publication agreement are explained in [the publication review](docs/PUBLICATION_REVIEW.md); public redistribution is not yet marked cleared.
