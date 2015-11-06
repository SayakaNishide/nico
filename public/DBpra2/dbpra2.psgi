use strict;
use warnings;

use DBpra2;

my $app = DBpra2->apply_default_middlewares(DBpra2->psgi_app);
$app;

