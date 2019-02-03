
@extends ('layouts.master')

@section('body')
    <div class="tutorial3"></div>

    <div class="background-gradient gradient-red">
        <h1 class="text-title"> How to set up PROS and use any I2C sensor with the VEX cortex </h1>
        I2C (Inter-Integrated Circuit) is a standard two wire communication protocol for communicating between different microcontrollers. It is mostly used for short-range communication between microcontrollers and sensors. Because of this is quite easy to find a variety of these sensors that use this protocol on websites like aliexpress or even from other robotics ecosystems like REV robotics. Explaining how I2C works on from a basic level is outside of the scope of this tutorial, however, it will explain some details that are necessary when using these sensors with the VEX cortex.<br/>
        The VEX Cortex I2C port uses 3.3V and is 5V tolerant like all other digital IO on the board. This means that if you want to attach it to a 5V sensor you should use a level shifter between the two devices. I2C also uses an address-based system so multiple sensors with unique addresses can be daisy chained together. When connecting the sensor to the cortex make sure that all 4 pins are correctly wired otherwise it won’t work and may damage the sensor. The 5V and ground wires are usually coloured red and black respectively, so you only need to check the sensors documentation for data and clock. I provided the Vex cortex’s pinout.<br/>
        While you can use the i2c port with robotc, it is much easier with PROS so in this tutorial I will use PROS in order to minimize the amount of potential problems. Most I2C sensors use a register layout to give the user access to a lot of data. Each register has an address and you can read and write to each entry in this table. The following is part of the table for the Rev Robtics colour sensor V2.
    </div>

    <div class="tutorial1"></div>

    <div class="background-gradient gradient-red">
        <h1 class="text-title"> Design </h1>
        You can write to a register using the command<br/><br/>
        <strong>i2cWriteRegister(ADDRESS,REGISTER,VALUE);</strong><br/><br/>
        For example<br/><br/>
        <strong>i2cWriteRegister(0x39, 0x80, 0x13);</strong><br/><br/>
        Where “ADDRESS” is the address of the i2c sensor not the register you want. You can find this near the top of the information for the sensor.<br/>
        Where “REGISTER” is the entry in the register table you want to access
        and “VALUE” is the number you want to write to that register.<br/>
        Reading is the same thing except<br/><br/>
        <strong>i2cReadRegister(ADDRESS,REGISTRER, RESULT, 1);</strong><br/><br/>
        For example:<br/><br/>
        <strong>uint8_t dataIn[1];</strong><br/>
        <strong>i2cReadRegister(0x39,0x80+0x16, dataIn, 1);</strong><br/><br/>
        Except “RESULT” is an 8-bit array. The value is stored in the first byte of this array.<br/>
        That’s all there is to using most I2C sensors, obviously some are more complicated than this and you should always check the sensors datasheet in order to find it’s register table and I2C address. Most registers use binary so you will want to familiarize yourself with binary notation of 8 bit numbers to control discreet features of the sensor.

    </div>

    <div class="tutorial2"></div>

    <div class="background-gradient gradient-red">
        <h1 class="text-title"> TROUBLESHOOTING </h1>
        If you only get 0’s from the i2cReadRegister(), try assigning a default value to dataIn to make sure the function is returning zero and if it is try checking the sensor, the wiring and the I2C address. If you have an oscilloscope you can check the data being transmitted but it may be difficult to get access to one.
    </div>

@endsection

@section('content')

@endsection
