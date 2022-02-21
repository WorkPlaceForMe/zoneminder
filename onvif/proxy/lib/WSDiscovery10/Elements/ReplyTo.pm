
package WSDiscovery10::Elements::ReplyTo;
use strict;
use warnings;

{ # BLOCK to scope variables

sub get_xmlns { 'http://schemas.xmlsoap.org/ws/2004/08/addressing' }

__PACKAGE__->__set_name('ReplyTo');
__PACKAGE__->__set_nillable();
__PACKAGE__->__set_minOccurs();
__PACKAGE__->__set_maxOccurs();
__PACKAGE__->__set_ref();
use base qw(
    SOAP::WSDL::XSD::Typelib::Element
    WSDiscovery10::Types::EndpointReferenceType
);

}

1;


=pod

=head1 NAME

WSDiscovery10::Elements::ReplyTo

=head1 DESCRIPTION

Perl data type class for the XML Schema defined element
ReplyTo from the namespace http://schemas.xmlsoap.org/ws/2004/08/addressing.







=head1 METHODS

=head2 new

 my $element = WSDiscovery10::Elements::ReplyTo->new($data);

Constructor. The following data structure may be passed to new():

 { # WSDiscovery10::Types::EndpointReferenceType
   Address =>  { value => $some_value },
   ReferenceProperties =>  { # WSDiscovery10::Types::ReferencePropertiesType
   },
   ReferenceParameters =>  { # WSDiscovery10::Types::ReferenceParametersType
   },
   PortType =>  { value => $some_value },
   ServiceName =>  { value => $some_value },
 },

=head1 AUTHOR

Generated by SOAP::WSDL

=cut

