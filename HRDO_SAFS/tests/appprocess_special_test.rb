#App Process Special Detail Test

require 'watir'
browser = Watir::Browser.new :chrome
browser.goto 'http://[::1]/HRDO_SAFS/apply/specialdetail'

#Obligations and Conditions
print "Testing Obligations and Conditions:\n\n"  

browser.div(:text => 'Type').click
if browser.text.include?("Special Detail with Pay (SDWP)")
	print "Type PASSED\n"
else
	print "Type FAILED\n"
end
browser.div(:text => 'Type').click

browser.div(:text => 'Conditions').click
if browser.text.include?("Provided, That members of the faculty who are married at the time")
	print "Conditions PASSED\n"
else
	print "Conditions FAILED\n"
end
browser.div(:text => 'Conditions').click

browser.div(:text => 'Restrictions').click
if browser.text.include?("A faculty member may, however, be allowed to go on special detail")
	print "Restrictions PASSED\n\n"
else
	print "Restrictions FAILED\n"
end
browser.div(:text => 'Restrictions').click


#Application Process
print "Testing Special Detail Application Process:\n\n"

print"Step 1\n"
browser.div(:text => 'Full Details').click
if browser.text.include?("Submit letter of request with endorsement")
	print "Full Details PASSED\n"
else
	print "Full Details FAILED\n"
end
browser.div(:text => 'Full Details').click

browser.div(:text => 'Service Provider').click
if browser.text.include?("Scholarship Section")
	print "Service Provider PASSED\n"
else
	print "Service Provider FAILED\n"
end
browser.div(:text => 'Service Provider').click

browser.div(:text => 'Person in charge').click
if browser.text.include?("Frontline Staff of Scholarship Section")
	print "Person in charge PASSED\n"
else
	print "Person in charge FAILED\n"
end
browser.div(:text => 'Person in charge').click

browser.div(:text => 'Forms').click
if browser.text.include?("Letter of request for special detail")
	print "Forms PASSED\n\n"
else
	print "Forms FAILED\n"
end
browser.div(:text => 'Forms').click


print"Step 2\n"
browser.div(:id => 'fulldetails2').click
if browser.text.include?("Verify the appointment status if effectivity")
	print "Full Details PASSED\n"
else
	print "Full Details FAILED\n"
end
browser.div(:id => 'fulldetails2').click

browser.div(:id => 'service2').click
if browser.text.include?("Appointment Section")
	print "Service Provider PASSED\n"
else
	print "Service Provider FAILED\n"
end
browser.div(:id => 'service2').click

browser.div(:id => 'person2').click
if browser.text.include?("Analyst of Appointment Section")
	print "Person in charge PASSED\n\n"
else
	print "Person in charge FAILED\n"
end
browser.div(:id => 'person2').click


print"Step 3\n"
browser.div(:id => 'fulldetails3').click
if browser.text.include?("Secure receiving copy of the Special Detail Application")
	print "Full Details PASSED\n"
else
	print "Full Details FAILED\n"
end
browser.div(:id => 'fulldetails3').click

browser.div(:id => 'service3').click
if browser.text.include?("Scholarship Section")
	print "Service Provider PASSED\n"
else
	print "Service Provider FAILED\n"
end
browser.div(:id => 'service3').click

browser.div(:id => 'person3').click
if browser.text.include?("Frontline Staff of Scholarship Section")
	print "Person in charge PASSED\n\n"
else
	print "Person in charge FAILED\n"
end
browser.div(:id => 'person3').click

