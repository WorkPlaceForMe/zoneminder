
package ONVIF::Analytics::Elements::Fault;
use strict;
use warnings;

{ # BLOCK to scope variables

sub get_xmlns { 'http://schemas.xmlsoap.org/soap/envelope/' }

__PACKAGE__->__set_name('Fault');
__PACKAGE__->__set_nillable();
__PACKAGE__->__set_minOccurs();
__PACKAGE__->__set_maxOccurs();
__PACKAGE__->__set_ref();
use base qw(
    SOAP::WSDL::XSD::Typelib::Element
    ONVIF::Analytics::Types::Fault
);

}

1;


=pod

=head1 NAME

ONVIF::Analytics::Elements::Fault

=head1 DESCRIPTION

Perl data type class for the XML Schema defined element
Fault from the namespace http://schemas.xmlsoap.org/soap/envelope/.







=head1 METHODS

=head2 new

 my $element = ONVIF::Analytics::Elements::Fault->new($data);

Constructor. The following data structure may be passed to new():

 { # ONVIF::Analytics::Types::Fault
   faultcode =>  $some_value, # QName
   faultstring =>  $some_value, # string
   faultactor =>  $some_value, # anyURI
   detail =>  { # ONVIF::Analytics::Types::detail
   },
 },

=head1 AUTHOR

Generated by SOAP::WSDL

=cut

