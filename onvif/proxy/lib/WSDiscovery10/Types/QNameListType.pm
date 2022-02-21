package WSDiscovery10::Types::QNameListType;
use strict;
use warnings;

sub get_xmlns { 'http://schemas.xmlsoap.org/ws/2005/04/discovery'};


# list derivation
use base qw(
    SOAP::WSDL::XSD::Typelib::Builtin::list
    SOAP::WSDL::XSD::Typelib::Builtin::QName
);





1;

__END__

=pod

=head1 NAME



=head1 DESCRIPTION

Perl data type class for the XML Schema defined simpleType
QNameListType from the namespace http://schemas.xmlsoap.org/ws/2005/04/discovery.





This clase is derived from
    SOAP::WSDL::XSD::Typelib::Builtin::QName
.

You may pass the following structure to new():

 [ $value_1, .. $value_n ]

All elements of the list must be of the class' base type (or valid arguments
to it's constructor).



=head1 METHODS

=head2 new

Constructor.

=head2 get_value / set_value

Getter and setter for the simpleType's value.

=head1 OVERLOADING

Depending on the simple type's base type, the following operations are overloaded

 Stringification
 Numerification
 Boolification

Check L<SOAP::WSDL::XSD::Typelib::Builtin> for more information.

=head1 AUTHOR

Generated by SOAP::WSDL

=cut

