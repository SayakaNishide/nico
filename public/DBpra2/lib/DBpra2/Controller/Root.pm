package DBpra2::Controller::Root;
use Moose;
use namespace::autoclean;
use DateTime;
use Data::Dumper;
use DBI;
use utf8;

my $dt = DateTime->now( time_zone=>'local' );
use DateTime::Format::MySQL;
my $str = DateTime::Format::MySQL->format_datetime($dt);

BEGIN { extends 'Catalyst::Controller' }

#
# Sets the actions in this controller to be registered with no prefix
# so they function identically to actions created in MyApp.pm
#
__PACKAGE__->config(namespace => '');

=encoding utf-8

=head1 NAME

DBpra2::Controller::Root - Root Controller for DBpra2

=head1 DESCRIPTION

[enter your description here]

=head1 METHODS

=head2 index

The root page (/)

=cut

use Data::Dumper;
sub index :Path :Args(0) {
    my ( $self, $c ) = @_; 
    my @db = $c->model('Model1::itemlist')->all;
    #my @a=();
    #die Dumper @db;
    #while(my $rec = $db->next) {
     #   push(@a, $rec);
    #}
    #return \@a;
    $c->stash(
        template => 'index.tt',
        id => \@db,
    );
#die Dumper \@a;
}

=head2 default

Standard 404 error page

=cut

sub insert :Local{
    my ( $self, $c ) = @_;
    if ($c->req->method() eq 'POST'){ 
        $c->form(
            name => [qw/NOT_BLANK/, [qw/JLENGTH 1 10/]],
            cost => [qw/NOT_BLANK/, [qw/REGEX/], [qw/GREATER_THAN 1/]],
            have => [qw/NOT_BLANK/, [qw/REGEX/], [qw/GREATER_THAN 1/], [qw/LESS_THAN 20/]],
        );
    my $db1 = $c->model('Model1::itemlist')->search({
       name => $c->req->param('name'),
       cost => $c->req->param('cost'),
                    });
        my $have = $c->req->param('have');
        if($db1){  
            $db1->update({
                   have => \"have + $have",
                   updated_at => \"now()",
                   });
        }else{
            my $db = $c->model('Model1::itemlist')->create({
                name => $c->req->param('name'),
                cost => $c->req->param('cost'),
                have => $c->req->param('have'),
                created_at => $str, 
                updated_at => $str,
            });
        }
    $c->res->redirect($c->stash->{template}='use');
   }
}

sub use :Local{
    my ( $self, $c ) = @_;
    if ($c->req->method() eq 'POST'){
        $c->form(
            uname => [qw/NOT_BLANK/, [qw/JLENGTH 1 10/]],
            unum => [qw/NOT_BLANK/, [qw/REGEX/], [qw/GREATER_THAN 1/], [qw/LESS_THAN 5/]],
        );
        my $use = $c->req->param('unum');
        my $db = $c->model('Model1::itemlist')->search({
            name => $c->req->param('uname'),
        });
        $db->update({
            have => \"have - $use",
            updated_at => \"now()", 
        });
       my $db2 = $c->model('Model1::itemlist')->search({
           have  => {'<' => 1},
        });
        foreach ($db2){
           $db2->delete;
           }
     $c->res->redirect($c->stash->{template}='redirect');
     }
 }

sub redirect :Local{
    my ( $self, $c) = @_;
    my @db = $c->model('Model1::itemlist')->all;
    $c->stash->{id}=\@db;
    $c->stash->{template}='redirect.tt';
}

sub delete :Local{
    my ( $self, $c) = @_;
    if ($c->req->method() eq 'POST'){
            my @delitema=();
            @delitema = $c->req->param('delitem');
            my $db = $c->model('Model1::itemlist')->search({
               no =>  \@delitema,
            });
        #die Dumper $db;
        foreach ($db){
           $db->delete;
        }
        $c->res->redirect($c->stash->{template}='redirect');
    }
}



sub default :Path {
    my ( $self, $c ) = @_;
    $c->response->body( 'Page not found' );
    $c->response->status(404);
}

=head2 end

Attempt to render a view, if needed.

=cut

sub end : ActionClass('RenderView') {}

=head1 AUTHOR

Catalyst developer

=head1 LICENSE

This library is free software. You can redistribute it and/or modify
it under the same terms as Perl itself.

=cut

__PACKAGE__->meta->make_immutable;

1;
