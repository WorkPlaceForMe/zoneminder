
package WSNotification::Elements::GetCurrentMessageResponse;
use strict;
use warnings;

{ # BLOCK to scope variables

sub get_xmlns { 'http://docs.oasis-open.org/wsn/b-2' }

__PACKAGE__->__set_name('GetCurrentMessageResponse');
__PACKAGE__->__set_nillable();
__PACKAGE__->__set_minOccurs();
__PACKAGE__->__set_maxOccurs();
__PACKAGE__->__set_ref();

use base qw(
    SOAP::WSDL::XSD::Typelib::Element
    SOAP::WSDL::XSD::Typelib::ComplexType
);

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







} # end of BLOCK



1;


=pod

=head1 NAME

WSNotification::Elements::GetCurrentMessageResponse

=head1 DESCRIPTION

Perl data type class for the XML Schema defined element
GetCurrentMessageResponse from the namespace http://docs.oasis-open.org/wsn/b-2.







=head1 PROPERTIES

The following properties may be accessed using get_PROPERTY / set_PROPERTY
methods:

=over


=back


=head1 METHODS

=head2 new

 my $element = WSNotification::Elements::GetCurrentMessageResponse->new($data);

Constructor. The following data structure may be passed to new():

 {
 },

=head1 AUTHOR

Generated by SOAP::WSDL

=cut

