package ONVIF::PTZ::Types::Documentation;
use strict;
use warnings;


__PACKAGE__->_set_element_form_qualified(1);

sub get_xmlns { 'http://docs.oasis-open.org/wsn/t-1' };

our $XML_ATTRIBUTE_CLASS;
undef $XML_ATTRIBUTE_CLASS;

sub __get_attr_class {
    return $XML_ATTRIBUTE_CLASS;
}

use Class::Std::Fast::Storable constructor => 'none';
use base qw(SOAP::WSDL::XSD::Typelib::ComplexType);

Class::Std::initialize();

{ # BLOCK to scope variables


__PACKAGE__->_factory(
    [ qw(
    ) ],
    {
    },
    {
    },
    {

    }
);

} # end BLOCK







1;


=pod

=head1 NAME

ONVIF::PTZ::Types::Documentation

=head1 DESCRIPTION

Perl data type class for the XML Schema defined complexType
Documentation from the namespace http://docs.oasis-open.org/wsn/t-1.






=head2 PROPERTIES

The following properties may be accessed using get_PROPERTY / set_PROPERTY
methods:

=over



=back


=head1 METHODS

=head2 new

Constructor. The following data structure may be passed to new():

 { # ONVIF::PTZ::Types::Documentation
 },




=head1 AUTHOR

Generated by SOAP::WSDL

=cut

