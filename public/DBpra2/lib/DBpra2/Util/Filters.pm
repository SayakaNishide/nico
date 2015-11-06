package DBpra2::Util::Filters;

use strict;
use warnings;
use utf8;
use Data::Dumper;

sub fd_have_color{
    return sub{
        #個数に合わせた文字色を取得する
        my ($have) = @_;

        #文字色取得
        my $color = '#0000FF';
        if($have>10){
            $color = '#669933';
        }elsif($have>5){
            $color = '#FF0000';
        }elsif($have>2){
            $color = '#669933';
        }

        #出力
        return sprintf("<span style='color:%s;'>%d</span>",$color,$have);
    }
}

1;
