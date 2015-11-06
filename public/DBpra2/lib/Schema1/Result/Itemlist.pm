use utf8;
package Schema1::Result::Itemlist;

# Created by DBIx::Class::Schema::Loader
# DO NOT MODIFY THE FIRST PART OF THIS FILE

=head1 NAME

Schema1::Result::Itemlist

=cut

use strict;
use warnings;

use Moose;
use MooseX::NonMoose;
use MooseX::MarkAsMethods autoclean => 1;
extends 'DBIx::Class::Core';

=head1 COMPONENTS LOADED

=over 4

=item * L<DBIx::Class::InflateColumn::DateTime>

=back

=cut

__PACKAGE__->load_components("InflateColumn::DateTime");

=head1 TABLE: C<itemlist>

=cut

__PACKAGE__->table("itemlist");

=head1 ACCESSORS

=head2 no

  data_type: 'integer'
  is_auto_increment: 1
  is_nullable: 0

=head2 name

  data_type: 'text'
  is_nullable: 1

=head2 cost

  data_type: 'integer'
  is_nullable: 1

=head2 have

  data_type: 'integer'
  is_nullable: 1

=head2 created_at

  data_type: 'datetime'
  datetime_undef_if_invalid: 1
  is_nullable: 0

=head2 updated_at

  data_type: 'datetime'
  datetime_undef_if_invalid: 1
  is_nullable: 0

=cut

__PACKAGE__->add_columns(
  "no",
  { data_type => "integer", is_auto_increment => 1, is_nullable => 0 },
  "name",
  { data_type => "text", is_nullable => 1 },
  "cost",
  { data_type => "integer", is_nullable => 1 },
  "have",
  { data_type => "integer", is_nullable => 1 },
  "created_at",
  {
    data_type => "datetime",
    datetime_undef_if_invalid => 1,
    is_nullable => 0,
  },
  "updated_at",
  {
    data_type => "datetime",
    datetime_undef_if_invalid => 1,
    is_nullable => 0,
  },
);

=head1 PRIMARY KEY

=over 4

=item * L</no>

=back

=cut

__PACKAGE__->set_primary_key("no");


# Created by DBIx::Class::Schema::Loader v0.07042 @ 2015-10-29 09:33:19
# DO NOT MODIFY THIS OR ANYTHING ABOVE! md5sum:ymsd7hF+ifpDyzd5UoujBA


# You can replace this text with custom code or comments, and it will be preserved on regeneration
__PACKAGE__->meta->make_immutable;
1;
