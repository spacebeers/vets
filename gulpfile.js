const gulp = require("gulp")
const less = require('gulp-less');
const clean = require('gulp-clean');
const argv = require('yargs').argv;

const config = {
  egConfig: {
    'target': 'eastgrinsteadvets.com'
  },
  crawleyConfig: {
    'target': 'crawleyvetclinic.co.uk'
  },
  copthornConfig: {
    'target': 'copthornevetclinic.co.uk'
  }
}

const theme = config[argv.theme] || config['egConfig'];

gulp.task('clean', function () {
  return gulp.src('./dist', { read: false })
    .pipe(clean());
});

gulp.task('pages', function () {
  gulp.src(['./src/pages/**/*.php'])
    .pipe(gulp.dest(`./dist/${theme.target}`));
});

gulp.task('partials', function () {
  gulp.src(['./src/partials/**/*.php'])
    .pipe(gulp.dest(`./dist/${theme.target}/includes`));
});

gulp.task('config', function () {
  gulp.src([`./src/${theme.target}/includes/config.php`])
    .pipe(gulp.dest(`./dist/${theme.target}/includes`));
});

gulp.task('assets', function () {
  return gulp.src([
      './src/assets/**/*'
    ])
    .pipe(gulp.dest(`./dist/${theme.target}/assets`));
});

gulp.task('javascript', function () {
  return gulp.src([
      './src/js/**/*'
    ])
    .pipe(gulp.dest(`./dist/${theme.target}/js`));
});


gulp.task('less', function () {
  return gulp.src(`./src/${theme.target}/less/theme.less`)
    .pipe(less())
    .pipe(gulp.dest(`./dist/${theme.target}/css`));
});


gulp.task('default', ['pages', 'partials', 'config', 'assets', 'javascript', 'less'])
